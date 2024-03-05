<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function findByEmail($email);
    public function create(array $data);

    public function login(array $data);

    public function logout();

    public function forgotPassword($email);

    public function resetPassword($email, $password);
}
