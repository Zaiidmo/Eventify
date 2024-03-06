<?php

use App\Http\Controllers\Admin\AdminController;
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
// Route::get('/eventsshow', function () {
//     return view('events.show');
// });
// Route::get('/events', function () {
//     return view('events.index');
// });

// Route::get('/admin', function () {
//     return view('dashboard.index');
// });
// Route::get('/users', function () {
//     return view('dashboard.users');
// });
//Authenticating

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
});
// Route::resource('events', EventController::class);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/forgot-password', [ResetPasswordController::class, 'forgetPasswordView'])->name('forgot.view');
    Route::post('/forgot', [ResetPasswordController::class, 'forgotPassword'])->name('forgot');
    Route::get('/reset-password', [ResetPasswordController::class, 'resetPasswordView'])->name('password.reset');
    Route::put('/reset', [ResetPasswordController::class, 'resetPassword'])->name('reset');
});


