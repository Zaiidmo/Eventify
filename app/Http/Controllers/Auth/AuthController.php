<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function loginView()
    {
        if(!Auth::check()){
            return view('Auth.login');
        }else{
            return redirect('/');
        }
    }
    public function registerView()
    {
        if(!Auth::check()){
            return view('Auth.register');
        }else{
            return redirect('/');
        }
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        // dd($data);

        $user = $this->userRepository->create($data);

        if (!$user) {
            return back()->with('error', 'Something went wrong');
        }

        auth()->attempt($request->only('email', 'password'));

        return redirect('/')->with('success', 'You have been registered successfully');

    }

    public function login(LoginRequest $request)
{
    $request->validated();
    $credentials = $request->only('email', 'password');
    $user = $this->userRepository->login($credentials);
    // dd($user);
    if ($user) {
        // Authentication successful
        if ($user->role === 'spectator') {
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    } else {
        // Authentication failed
        return back()->withInput()->withErrors(['email' => 'Invalid email or password']);
    }
}

    public function logout()
    {
        $this->userRepository->logout();

        return redirect('/');
    }
}
