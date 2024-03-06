<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

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
    public function show(String $id)
    {
        $categories = Category::all();
        $event = Event::find($id);
        if ($event && $event->status !== 'approved') {
            // Redirect the user or display a message
            return redirect('/')->with('error', 'Unpublished Events Cannot be Reached.');
        }
    
        return view('events.show', ['event' => $event , 'categories' => $categories]);
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
        if(Auth::id() !== $event->user_id){
            return redirect()->route('events.show', $event)->with('error', 'You are not authorized to update this event.');
        }
        $validatedData = $request->validated();

        if ($request->hasFile('poster')) {
            // Generate a unique filename for the poster
            $fileName = time() . '_' . $request->file('poster')->getClientOriginalName();
            // Store the poster in the storage
            $request->file('poster')->storeAs('public/uploads/events', $fileName);
            // Update the poster attribute in the validated data
            $validatedData['poster'] = $fileName;
        }
    
        // Update the event with the validated data
        $event->update($validatedData);
    
        // Redirect back to the event details page or any other appropriate route
        return redirect()->route('events.show', $event)->with('success', 'Event updated successfully');

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
        $user = auth()->user();
        // Check if the authenticated user is a manager
        if ($user->hasRole('manager')) {
            // Update the event status to approved
            $event->update(['status' => 'approved']);
            dd($event);
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
