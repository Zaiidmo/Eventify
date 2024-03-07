<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Event;
use App\Models\Ticket;
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
        $existingTicket = Ticket::where('event_id', $event->id)
            ->where('user_id', $userId)
            ->exists();

        if ($existingTicket) {
            return redirect()->back()->with('error', 'You have already purchased a ticket for this event.');
        }
        // Check if there are available tickets for the event
        if ($event->available_tickets > 0) {
            $this->createTicket($event, $userId);

            // Send email confirmation to the user
            // Mail::to(auth()->user()->email)->send(new TicketPurchased($event));

            return redirect()->back()->with('success', 'Ticket purchased successfully!');
        } else {
            return redirect()->back()->with('error', 'No available tickets for this event.');
        }
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
        // Create a new ticket for the user
        $ticket = new Ticket();
        $ticket->event_id = $event->id;
        $ticket->user_id = $userId;
        $ticket->price = $event->ticket_price; // Set the ticket price based on the event
        if ($event->mode == 'auto') {
            $ticket->status = 'approved';
        }
        $ticket->save();
    }
}
