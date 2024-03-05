<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return true;
        }
        return false;
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
    public function forgotPassword($email)
    {
        $response = Password::sendResetLink(['email' => $email]);

        return $response === Password::RESET_LINK_SENT;
    }
    public function resetPassword($email, $password)
    {
        $user = $this->findByEmail($email);
        if($user){
            $user->password = bcrypt($password);
            $user->save();
            return true;
        }
        return false;
    }
}
