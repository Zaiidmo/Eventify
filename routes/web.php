<?php

use App\Http\Controllers\AuthController ;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('events', 'EventController');
Route::get('/eventsshow', function () {
    return view('events.show');
});
Route::get('/events', function () {
    return view('events.index');
});
Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/forgotPassword', function () {
    return view('Auth.forgotPassword');
});

Route::get('/admin', function () {
    return view('dashboard.index');
});
Route::get('/users', function () {
    return view('dashboard.users');
});
