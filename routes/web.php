<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;

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
use App\Models\introduction;
use App\Models\Feature;
Route::get('/', function () {
    $introduction = introduction::all();
    $features = Feature::all();
    return view('welcome',compact('introduction'));
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[SiteController::class, 'dashboard'])->name('dashboard');

route::get('/first/section', [SiteController::class,'firstSection'])->name('firstSection');

Route::get('/aboutus',[SiteController::class, 'aboutus'])->name('aboutus');

Route::post('/contact/mail',[SiteController::class, 'contactmail'])->name('contact-mail');

Route::get('/addaboutus',[SiteController::class, 'add_aboutus'])->name('addaboutus');

Route::get('/add/features',[SiteController::class, 'add_features'])->name('add-features');

Route::get('/add/screenshots',[SiteController::class, 'add_screenshots'])->name('add-screenshots');

Route::get('/add/introduction',[SiteController::class, 'addIntroduction'])->name('add-introduction');

Route::get('/save/aboutus',[SiteController::class, 'save_aboutus'])->name('saveaboutus');

Route::post('/save/features',[SiteController::class, 'save_Feature'])->name('save-features');

Route::post('/save/introduction',[SiteController::class, 'save_Introduction'])->name('save-introduction');

Route::get('/features',[SiteController::class, 'features'])->name('features');

Route::get('/whyus',[SiteController::class, 'whyus'])->name('whyus');

Route::get('/screenshots',[SiteController::class, 'screenshots'])->name('screenshots');

Route::get('/packages',[SiteController::class, 'packages'])->name('packages');

Route::get('/contact',[SiteController::class, 'contact'])->name('contact');

Route::get('/subscribe',[SiteController::class, 'subscribe'])->name('subscribe');

 
