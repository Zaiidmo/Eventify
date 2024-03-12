<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Mail\ReservationStatusUpdate;
use App\Models\Event;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Event $event)
    {
        $userId = auth()->id();

        // Check if the user has already purchased a ticket for this event
        if ($this->hasPurchasedTicket($event, $userId)) {
            if ($event->mode === 'auto') {
                return redirect()->back()->with('error', 'You have already purchased a ticket for this event.');
            } else {
                return redirect()->back()->with('error', 'You have already reserved a ticket for this event, please keep checking your email for your reservation status.');
            }

            if ($this->isEventNear($event)) {
                return redirect()->back()->with('error', 'Sorry, you cannot purchase a ticket for this event as it is less than half a day away.');
            }
        }

        if ($this->hasAvailableTickets($event)) {
            $ticket = $this->createTicket($event, $userId);
            // Send email confirmation to the user
            // Mail::to(auth()->user()->email)->send(new TicketPurchased($event));
            if ($ticket->status === 'approved') {
                $event->decrement('available_tickets');
                Mail::to($ticket->user->email)->send(new ReservationStatusUpdate($ticket));
                return redirect()->route('event.pay', $event)->with('success', 'Ticket reserved, please proceed to payment.');
                // return redirect()->back()->with('success', 'Ticket purchased successfully! Check your email for confirmation.');
            } else {
                return redirect()->back()->with('success', 'Ticket reserved successfully! Please wait for approval.');
            }
        }

        return redirect()->back()->with('error', 'No available tickets for this event.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
    public function createTicket($event, $userId)
    {
        // Determine ticket status based on event mode
        $ticketStatus = $event->mode === 'auto' ? 'approved' : 'pending';
        // Create a new ticket for the user
        $ticket = new Ticket();
        $ticket->event_id = $event->id;
        $ticket->user_id = $userId;
        $ticket->price = $event->ticket_price; // Set the ticket price based on the event
        $ticket->status = $ticketStatus;
        $ticket->save();

        return $ticket;
    }
    protected function hasPurchasedTicket(Event $event, $userId)
    {
        return Ticket::where('event_id', $event->id)
            ->where('user_id', $userId)
            ->exists();
    }
    protected function isEventNear(Event $event)
    {
        $eventDateTime = Carbon::parse($event->date . ' ' . $event->time);
        $currentDateTime = Carbon::now();
        $remainingTime = $eventDateTime->diffInHours($currentDateTime);
        return $remainingTime <= 12;
    }
    protected function hasAvailableTickets(Event $event)
    {
        return $event->available_tickets > 0;
    }

    public function approveReservation($ticketId)
    {
        $ticket = Ticket::find($ticketId);
        $ticket->status = 'approved';
        $ticket->save();
        $event = $ticket->event;
        $event->decrement('available_tickets');
        Mail::to($ticket->user->email)->send(new ReservationStatusUpdate($ticket));
        return redirect()->back();
    }
    public function denyReservation($ticketId)
    {
        $ticket = Ticket::find($ticketId);
        $ticket->status = 'denied';
        $ticket->save();
        return redirect()->back();
    }
}
