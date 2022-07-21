<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalProjectController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventFormController;
use App\Http\Controllers\RoomFormController;
use App\Http\Controllers\ReactAppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\FullCalendarController;


use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\ConfirmedTwoFactorAuthenticationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RecoveryCodeController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;



/*
|--------------------------------------------------------------------------
| Admin Starts Here
|--------------------------------------------------------------------------
|
*/



// Login - Logout
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])
->middleware(['guest:'.config('fortify.guard')])
->name('login');


$limiter = config('fortify.limiters.login');
$twoFactorLimiter = config('fortify.limiters.two-factor');
$verificationLimiter = config('fortify.limiters.verification', '6,1');

Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])
->middleware(array_filter([
'guest:'.config('fortify.guard'),
$limiter ? 'throttle:'.$limiter : null,
]));

Route::get('/admin/logout', [AdminController::class, 'logout']);


// Register

Route::get('/admin/register', [RegisteredUserController::class, 'create'])
->middleware(['guest:'.config('fortify.guard')])
->name('register');
Route::post('/admin/register/store', [RegisteredUserController::class, 'store'])
->middleware(['guest:'.config('fortify.guard')]);

// Forgot Password

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('password.request');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('password.reset');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('password.email');
                                
Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware(['guest:'.config('fortify.guard')])
                ->name('password.update');
    
// Admin and Main Admin 

Route::controller(AdminController::class)->middleware('can:admin')->middleware('auth')->group(function () {
    Route::get('/admin', 'index');
    Route::get('/admin/main', 'main');
    Route::get('/admin/main/create', 'create');
    Route::post('/admin/main/store', 'store');
    Route::get('/admin/main/{id}', 'show');
    Route::get('/admin/main/{id}/edit', 'edit');
    Route::put('/admin/main/{id}/edit', 'edit');
    Route::get('/admin/main/{id}/delete', 'destroy');
});


// Admin Events

Route::resource('/admin/events', AdminEventController::class);
Route::get('/admin/events/{id}/delete', [AdminEventController::class, 'destroy']);


// Admin Rooms
Route::resource('/admin/rooms', AdminRoomController::class);
Route::get('/admin/rooms/{id}/delete', [AdminRoomController::class, 'destroy']);

// Book a Room and Event
Route::post('/room/submit', [RoomFormController::class, 'RoomForm']);
Route::post('/event/submit/', [EventFormController::class, 'EventForm']);

// Contact Us Page
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact/submit', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


// React Routes
Route::get('/{path?}', [ReactAppController::class, 'app'])->where('path', '.*');


