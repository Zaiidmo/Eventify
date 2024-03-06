<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('event', 'App\Http\Controllers\EventController');

// Route::post('register', [AuthController::class, 'register']);
// Route::controller(AuthController::class)->group(function(){
//     Route::get('login', 'AuthController@loginView');
//     Route::get('register', 'AuthController@registerView');
//     Route::post('login', 'AuthController@login');
//     Route::get('logout', 'AuthController@logout');
// });
