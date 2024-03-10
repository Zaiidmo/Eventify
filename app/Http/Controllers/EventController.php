<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
        $categories = Category::all();
    $events = Event::where('status', 'approved')->paginate(6);
    foreach ($events as $event) {
        $eventDateTime = Carbon::parse($event->date);
        $remainingTime = $eventDateTime->diffForHumans(now(), true);
        
        if ($eventDateTime->gt(now())) {
            $event->remaining_time = 'In ' . $remainingTime;
        } else {
            $event->remaining_time = $remainingTime . ' ago';
        }
    }
    return view('events.index', ['events' => $events, 'categories' => $categories]);
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
    public function show(string $id)
    {
        $categories = Category::all();
        $event = Event::find($id);
        if ($event && $event->status !== 'approved') {
            // Redirect the user or display a message
            return redirect('/')->with('error', 'Unpublished Events Cannot be Reached.');
        }

        // Call your method to calculate remaining time
        $remainingTimeString = $this->calculateTheRemainingDays($event);

        return view('events.show', [
            'event' => $event,
            'categories' => $categories,
            'remaining_time' => $remainingTimeString,
        ]);
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
        if (Auth::id() !== $event->user_id) {
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

    public function calculateTheRemainingDays($event)
    {
        $eventDateTime = Carbon::parse($event->date . ' ' . $event->time);
        $currentDateTime = Carbon::now();

        // Get the difference between the event datetime and current datetime
        $diff = $eventDateTime->diff($currentDateTime);

        // Extract individual components of the difference
        $months = $diff->m;
        $weeks = floor($diff->days / 7);
        $days = $diff->d % 7;
        $hours = $diff->h;

        // Construct the remaining time string
        $remainingTimeString = '';
        if ($months > 0) {
            $remainingTimeString .= "$months months";
        }
        if ($weeks > 0) {
            $remainingTimeString .= " $weeks weeks";
        }
        if ($days > 0) {
            $remainingTimeString .= " $days days";
        }
        if ($hours > 0) {
            $remainingTimeString .= " $hours hours";
        }
        if (empty($remainingTimeString)) {
            $remainingTimeString = 'less than an hour';
        } else {
            $remainingTimeString .= $eventDateTime->gt($currentDateTime) ? ' from now' : ' ago';
        }
        return $remainingTimeString;
    }

    public function successfulPayment(){
        return view('events.successPayment');
    }
    
}
