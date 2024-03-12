<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class UserRepository implements UserRepositoryInterface
{
    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }
    public function create(array $data)
    {
        return User::create($data);
    }
    public function login(array $credentials)
    {
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return null;
        } 
        if ($user->account_status === 'restricted') {
            return null;
        }
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return Auth::user();
        }
        
        // Authentication failed
        return null;
    }
        
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return true;
    }
    public function forgotPassword($email)
    {
        $response = Password::sendResetLink(['email' => $email]);

        return $response === Password::RESET_LINK_SENT;
    }
    public function resetPassword($email, $password)
    {
        $user = $this->findByEmail($email);
        if ($user) {
            $user->password = bcrypt($password);
            $user->save();
            return true;
        }
        return false;
    }
}
