<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function users()
    {
        return view('dashboard.users');
    }
    public function allEvents()
    {
        return view('dashboard.events');   
    }
}
