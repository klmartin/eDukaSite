<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[App\Http\Controllers\SiteController::class, 'dashboard'])->name('dashboard');

Route::get('/aboutus',[App\Http\Controllers\SiteController::class, 'aboutus'])->name('aboutus');

Route::post('/contact/mail',[App\Http\Controllers\SiteController::class, 'contactmail'])->name('contact-mail');

Route::get('/addaboutus',[App\Http\Controllers\SiteController::class, 'add_aboutus'])->name('addaboutus');

Route::get('/saveaboutus',[App\Http\Controllers\SiteController::class, 'save_aboutus'])->name('saveaboutus');

Route::get('/whyus',[App\Http\Controllers\SiteController::class, 'whyus'])->name('whyus');

Route::get('/screenshots',[App\Http\Controllers\SiteController::class, 'screenshots'])->name('screenshots');

Route::get('/packages',[App\Http\Controllers\SiteController::class, 'packages'])->name('packages');

Route::get('/contact',[App\Http\Controllers\SiteController::class, 'contact'])->name('contact');

 
