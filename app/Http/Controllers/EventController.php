<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        // $this->middleware('role:organizer,manager')->except(['index', 'show',]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('events.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // Redirect to login page if user is not authenticated
        }

        $validatedData = $request->validated();
        $fileName = time() . $request->name . '.' . $request->file('poster')->getClientOriginalName();
        $request->poster->storeAs('public/uploads/events', $fileName);
        $validatedData['poster'] = $fileName;

        $event = new Event($validatedData);
        $event->user()->associate(auth()->user());

        // Attempt to save the event
        if ($event->save()) {
            // If event creation is successful, redirect with success message
            return redirect()->route('events.index')->with('success', 'Event created successfully!');
        } else {
            // If event creation fails, return back with error message
            return back()->withInput()->with('error', 'Failed to create event. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // Check if the authenticated user is a manager or the organizer of the event
        if (auth()->user()->hasRole('manager') || auth()->user()->id === $event->user_id) {
            // Delete the event
            $event->delete();

            // Redirect to a specific route or view with a success message
            return redirect()->route('eventsManagement')->with('success', 'Event deleted successfully');
        }

        // If not authorized, redirect back with an error message
        return redirect()->back()->with('error', 'You are not authorized to delete this event.');
    }
    public function approve(Event $event)
    {
        // Check if the authenticated user is a manager
        if (auth()->user()->hasRole('manager')) {
            // Update the event status to approved
            $event->update(['status' => 'approved']);
            // dd($event);

            // Redirect with a success message
            return redirect()->route('eventsManagement')->with('success', 'Event approved successfully');
        }

        // If not authorized, redirect back with an error message
        return redirect()->back()->with('error', 'You are not authorized to approve events.');
    }

    public function deny(Event $event)
    {
        // Check if the authenticated user is a manager
        if (auth()->user()->hasRole('manager')) {
            // Update the event status to denied
            $event->update(['status' => 'denied']);

            // Redirect with a success message
            return redirect()->route('eventsManagement')->with('success', 'Event denied successfully');
        }

        // If not authorized, redirect back with an error message
        return redirect()->back()->with('error', 'You are not authorized to deny events.');
    }
}
