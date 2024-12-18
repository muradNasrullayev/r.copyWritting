<?php

use App\Http\Controllers\admin\{IntroductionController,
    MainController as AdminController,
    TestimonialController,
    WelcomePageController,
    WhyChooseUsController,
    CapabilitiesController};
use App\Http\Controllers\web\{BlogController, BookingController, MainController, ServiceController};
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
//WEB
Route::get('/', [MainController::class, 'index']);
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'service'])->name('service');
Route::get('/booking', [BookingController::class,'booking'])->name('booking');
Route::get('/blogs', [BlogController::class,'blogs'])->name('blogs');

//ADMIN
Route::group(['prefix'=>'/admin','as'=>'admin.'], function () {
    Route::get('/',[AdminController::class,'index'])->name('home');
    Route::resource('/whychooseus', WhyChooseUsController::class);
    Route::resource('/introduction', IntroductionController::class);
    Route::resource('/welcomepage', WelcomePageController::class);
    Route::resource('/capabilities', CapabilitiesController::class);
    Route::resource('/testimonials', TestimonialController::class);
});
