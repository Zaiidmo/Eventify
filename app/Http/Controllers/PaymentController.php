<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Event;
use App\Models\Payment;
use Illuminate\Support\Facades\Request;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    public function preparePayment(Request $request, Event $event)
    {
        // Retrieve authenticated user
        $user = auth()->user();

        // Create a payment request to Mollie
        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'USD', // Adjust currency as needed
                'value' => $event->ticket_price . '.00', // Assuming ticket price is in whole dollars
            ],
            'description' => 'Ticket for Event: ' . $event->title,
            'redirectUrl' => route('events.index'), // Adjust success route as needed
            'metadata' => [
                'event_id' => $event->id,
            ],
        ]);

        // Associate the payment with the user
        $user->payments()->create([
            'payment_reference' => $payment->id,
            'status' => 'pending',
            'event_id' => $event->id,
            'amount' => $event->ticket_price,
        ]);

        // Store payment ID in session for later retrieval
        session(['payment_id' => $payment->id]);

        // Redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
    public function success(Request $request)
    {
        $paymentId = session('payment_id');

        // Retrieve payment information from Mollie
        $payment = Mollie::api()->payments->get($paymentId);

        // Check if payment is successful
        if ($payment->isPaid()) {
            // Retrieve associated payment record from database
            $userPayment = auth()->user()->payments()->where('payment_reference', $paymentId)->first();

            // Update payment status to 'paid'
            $userPayment->update(['status' => 'paid']);

            // Optionally, update event ticket availability, generate ticket, or perform any other necessary actions

            // Clear payment ID from session
            session()->forget('payment_id');

            return redirect('/')->with('success', 'Your payment is successful!');
        }

        // If payment is not successful, redirect to failure page
        return redirect()->route('failure')->with('error', 'Payment was not successful.');
    }
    public function cancel(Request $request)
    {
        $paymentId = session('payment_id');
        $userPayment = auth()->user()->payments()->where('payment_reference', $paymentId)->first();
        $userPayment->update(['status' => 'canceled']);
        return redirect()->route('home')->with('error', 'Payment was canceled.');
    }
}
