<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Frontend\TrackingController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\MediaController;
use App\Http\Controllers\Frontend\ContactController;



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

Route::get('/',[PagesController::class,'index'])->name('home');
Route::resource('/about', AboutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/media', MediaController::class);
Route::resource('/tracking', TrackingController::class);




// Route::get('/tracking/data',[TrackingController::class,'store'])->name('tracking.data');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
