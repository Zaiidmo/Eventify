<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
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
        return view('Auth.login');
    }
    public function registerView()
    {
        return view('Auth.register');
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
        $credentials = $request->validated();
        $user = $this->userRepository->login($credentials);
        if(Auth::user()->role === 'spectator'){
            return redirect('/');
        }else{
            return redirect('/dashboard');
        } 
    }
    public function logout()
    {
        $this->userRepository->logout();

        return redirect('/');
    }
}
