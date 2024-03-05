<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function postregister(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = $this->userRepository->register($data);
        return response()->json($user, 201);
        // if ($user) {
        //     auth()->login($user); 
        //     return redirect('/');
            // if ($user->isAdmin()) {
            //     return redirect()->route('admin.dashboard');
            // } elseif ($user->isOrganizer()) {
            //     return redirect()->route('organizer.form', $user->id);
            // } elseif ($user->isSpectator()) {
            //     return redirect('/');
            // }
    
        // } else {
        //     return back()->with('error', 'Registration failed.');
        // }
        
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if ($this->userRepository->login($credentials)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }
}
