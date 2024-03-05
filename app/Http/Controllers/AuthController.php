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

    public function loginView()
    {
        return view('auth.login');
    }
    public function registerView()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = $this->userRepository->register($data);
        if ($user) {
            return redirect('login');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if ($this->userRepository->login($credentials)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }
}
