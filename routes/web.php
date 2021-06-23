<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//frontend routes
Route::group(['as' => 'frontend.'], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/form', [FrontendController::class, 'form'])->name('form');
    Route::post('/form', [FrontendController::class, 'form_store'])->name('form.store');
});



Auth::routes();
// Socialite routes
Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
    Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('callback');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');









// Pages route e.g. [about,contact,etc]
Route::get('/{slug}', PageController::class)->name('page');




//Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {
//    Route::get('/form', [FrontendController::class, 'form'])->name('form');
//
//});
