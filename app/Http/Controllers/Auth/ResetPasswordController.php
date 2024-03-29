<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function forgetPasswordView()
    {
        return view('Auth.forgotPassword');
    }
    public function resetPasswordView(Request $request)
    {
        $email = $request->email;
        $user = $this->userRepository->findByEmail($email);
        $token = $user->remember_token;
        if (!empty($user)) {
            return view('Auth.resetPassword', compact('user'));
        } else {
            abort(404);
        }
    }

    public function forgotPassword(Request $request)
    {
        $user = $this->userRepository->findByEmail($request->email);

        if (!empty($user)) {
            // Generate a new remember token
            $user->update(['remember_token' => Str::random(30)]);

            // Send the password reset email
            $user->sendPasswordResetNotification($user->remember_token);

            return redirect()->back()->with('success', 'Please check your email and reset your password');
        } else {
            return redirect()->route('forgot.view')->with('error', 'User not found');
        }
    }
    public function resetPassword(Request $request)
    {
        // dd($request->email);
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required|min:8',
        ]);

        $user = $this->userRepository->findByEmail($request->email);
        if (!$user) {
            return redirect()->back()->with('error', 'Invalid token or email');
        }

        // Update the password
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(30);
        $user->save();

        return redirect('/login')->with('success', 'Password updated successfully');
    }
}
