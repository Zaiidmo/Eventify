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

Route::resource('events', EventController::class);

Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'AuthController@register');
    Route::get('login', 'AuthController@loginView');
    Route::get('register', 'AuthController@registerView');
    Route::post('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');
});