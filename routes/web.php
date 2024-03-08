<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TicketController;
use App\Models\Category;
use App\Models\Event;
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
    $topCategories = Category::withCount('events')->orderByDesc('events_count')->take(3)->get();
    $events = Event::where('status', 'approved')->latest()->take(4)->get();
    return view('welcome', ['events' => $events , 'topCategories' => $topCategories]);
});


Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
//Admin Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/eventsManagement', [AdminController::class, 'allEvents'])->name('eventsManagement');
    Route::get('/tickets', [AdminController::class, 'tickets'])->name('Tickets');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/account', [AdminController::class, 'account'])->name('account');
});
//Organizers {{Events Routes}}
Route::group(['middleware' => 'auth'], function () {
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::put('/events/{event}/approve', [EventController::class, 'approve'])->name('events.approve');
    Route::put('/events/{event}/deny', [EventController::class, 'deny'])->name('events.deny');
    Route::get('/events/tickets/successfulPayment', [EventController::class, 'successfulPayment'])->name('events.successPayment');
});
//Guests
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/forgot-password', [ResetPasswordController::class, 'forgetPasswordView'])->name('forgot.view');
    Route::post('/forgot', [ResetPasswordController::class, 'sendResetEmail'])->name('forgot');
    Route::get('/reset-password', [ResetPasswordController::class, 'resetPasswordView'])->name('password.reset');
    // Route::put('/reset', [ResetPasswordController::class, 'resetPassword'])->name('reset');
});

//Tickets 
Route::group(['middleware' => 'auth'], function () {
    Route::post('/events/{event}/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::put('/tickets/{ticket}/approve', [TicketController::class, 'approveReservation'])->name('tickets.approve');
    Route::put('/tickets/{ticket}/deny', [TicketController::class, 'denyReservation'])->name('tickets.deny');
});

//Payment
Route::group(['middleware' => 'auth'], function () {
    Route::get('/payment/{event}/pay', [PaymentController::class, 'preparePayment'])->name('event.pay');
    Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
    Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
});