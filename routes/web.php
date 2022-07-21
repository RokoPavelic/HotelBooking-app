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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/home', function () {
//     return view('components/layout');
// });

// Admin Starts Here


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
                        

// Main Admin 
Route::get('/admin/main', [AdminController::class, 'main'])->middleware('can:admin');
Route::get('/admin/employee/{id}', [AdminController::class, 'show'])->middleware('can:admin');
Route::get('/admin/main/create', [AdminController::class, 'create'])->middleware('can:admin');
Route::post('/admin/main/store', [AdminController::class, 'store'])->middleware('can:admin');
Route::get('/admin/main/{id}/edit', [AdminController::class, 'edit'])->middleware('can:admin');
Route::put('/admin/main/{id}/edit', [AdminController::class, 'edit'])->middleware('can:admin');
Route::get('/admin/main/{id}/delete', [AdminController::class, 'destroy']);

// Admin Events
Route::get('/load-events',[EventController::class, 'loadEvents'])->name('loadEvents');

Route::get('/admin', function () {
    return view('pages/admin/admin');
});
// Route::get('/adminbookings', function () {
//     return view('pages/admin/adminbookings');
//});
Route::get('/adminrooms', function () {
    return view('pages/admin/adminrooms');
});

Route::resource('/admin/events', AdminEventController::class);
Route::get('/admin/events/{id}/delete', [AdminEventController::class, 'destroy']);
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

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

// Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
//     $enableViews = config('fortify.views', true);

//     

//     // Registration...
 

//     // Email Verification...
//     if (Features::enabled(Features::emailVerification())) {
//         if ($enableViews) {
//             Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
//                 ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
//                 ->name('verification.notice');
//         }

//         Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//             ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'signed', 'throttle:'.$verificationLimiter])
//             ->name('verification.verify');

//         Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//             ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'throttle:'.$verificationLimiter])
//             ->name('verification.send');
//     }

//     // Profile Information...
//     if (Features::enabled(Features::updateProfileInformation())) {
//         Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
//             ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
//             ->name('user-profile-information.update');
//     }

//     // Passwords...
//     if (Features::enabled(Features::updatePasswords())) {
//         Route::put('/user/password', [PasswordController::class, 'update'])
//             ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
//             ->name('user-password.update');
//     }

//     // Password Confirmation...
//     if ($enableViews) {
//         Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
//             ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')]);
//     }

//     Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
//         ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
//         ->name('password.confirmation');

//     Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
//         ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
//         ->name('password.confirm');

//     // Two Factor Authentication...
    
// }
      

     
 










// Route::get('/admin/login', [AdminController::class, 'login']);
// Route::post('/admin/login', [AdminController::class, 'check_login']);

// Route::get('/admin/register', [AdminController::class, 'create']);
// Route::post('/admin/register/store', [AdminController::class, 'store']);



// Route::get('/admin/delete', [AdminController::class, 'destroy']);
