<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function forgetPasswordView(){
        return view('Auth.forgotPassword');
    }
    public function resetPasswordView(){
        return view('Auth.resetPassword');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        // dd($request);
        $status = $this->userRepository->forgotPassword($request->email);

        return $status 
                ? redirect('/')->with('success', 'Password reset link sent successfully')
                : redirect('/')->withErrors(['email' => 'Failed to send password reset link']);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = $this->userRepository->resetPassword($request->email, $request->password);

        return $status 
                ? redirect()->route('login')->with('success', 'Password reset successfully')
                : back()->withErrors(['email' => 'User not found']);
    }
}
