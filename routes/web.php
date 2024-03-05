<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::get('/admin', function () {
    return view('dashboard.index');
});
Route::get('/users', function () {
    return view('dashboard.users');
});
//Authenticating
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginView');
    Route::get('/register', 'registerView');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
    Route::post('logout','logout')->name('logout');
});

// Route::controller(ResetPasswordController::class)->group(function(){
//     Route::get('reset-password/{token}', 'resetPasswordView')->name('reset.password.view');
//     Route::get('forget-password', 'forgetPasswordView')->name('forget.password.view');
//     Route::post('forgot-password', 'forgotPassword')->name('forgot.password');
//     Route::post('reset-password', 'resetPassword')->name('reset.password');
// });


Route::post('forgot-password', [ResetPasswordController::class, 'forgotPassword'])->name('forgot.password');