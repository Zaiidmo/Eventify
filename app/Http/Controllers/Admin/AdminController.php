<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Role;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:manager')->only(['dashboard', 'users', 'allEvents','tickets']); // Only Managers Can Acceess these Methods
    }
    public function dashboard()
    {
        return view('dashboard.index', [
            'authUser' => auth()->user(),
            'users' => User::all(),
        ]);
    }
    public function users()
    {
        return view('dashboard.users', [
            'authUser' => auth()->user(),
            'countUsers' => User::count(),
            'users' => User::paginate(6),
        ]);
    }
    public function allEvents()
    {
        return view('dashboard.events', [
            'authUser' => auth()->user(),
            'countEvents' => Event::count(),
            'events' => Event::paginate(7),
        ]);
    }
    public function tickets()
    {
        return view('dashboard.tickets', [
            'authUser' => auth()->user(),
            'countTickets' => Ticket::count(),
            'tickets' => Ticket::paginate(7),
        ]);
    }
    public function account()
    {
        return view('dashboard.account', [
            'authUser' => auth()->user(),
        ]);
    }
    public function updateAccountStatus(Request $request, User $user)
    {
        $request->validate([
            'account_status' => 'required|in:allowed,restricted',
        ]);
    
        // Update the user's account status
        $user->account_status = $request->account_status;
        $user->save();
    
        // Redirect back or return a response
        return redirect()->back()->with('success', 'User account status updated successfully');
    }

}
