<?php 
namespace App\Repositories;

interface UserRepositoryInterface{
    public function register(array $data);
    public function login(array $data);
    public function logout();
    // public function getUser();
    // public function update(array $data , $id);
    // public function deleteUser($id);
}