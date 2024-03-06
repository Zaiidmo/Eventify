<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('role:manager'); // Only Managers Can Acceess these Methods
    }
    public function dashboard()
    {
                
        return view('dashboard.index', [
            'authUser' =>auth()->user(),
            'users' => User::all()
        ]);
    }
    public function users()
    {
        return view('dashboard.users', [
            'authUser' =>auth()->user(),
            'countUsers' =>User::count(),
            'users' => User::all()
        ]);
    }
    public function allEvents()
    {
        return view('dashboard.events', [
            'authUser' =>auth()->user(),
            'countEvents' =>Event::count(),
            'events' => Event::all()
        ]);  
    }
}
