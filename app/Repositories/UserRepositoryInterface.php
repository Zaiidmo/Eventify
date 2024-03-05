<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function create(array $data);

    public function login(array $data);

    public function logout();
}
