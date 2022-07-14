<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalProjectController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReactAppController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function() {
    return view('components/layout');
});

// Route::get('/about', function() {
//     return view('about');
// });

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact/submit', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


// Route::get('/feedback', [ReactAppController::class, 'app']);


Route::get('/{path?}', [ReactAppController::class, 'app'])->where('path', '.*');
