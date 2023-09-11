<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

//for Google
Route::get('auth/google/redirect',[GoogleController::class, 'redirectToGoogle'])->name('redirect-to-google');
Route::get('auth/google/callback',[GoogleController::class, 'handleGoogleCallback']);

//for GitHub
Route::get('auth/github/redirect',[GoogleController::class, 'redirectToGithub'])->name('redirect-to-github');
Route::get('auth/github/callback',[GoogleController::class, 'handleGithubCallback']);

//for Facebook
Route::get('auth/facebook/redirect',[GoogleController::class, 'redirectToFacebook'])->name('redirect-to-facebook');
Route::get('auth/facebook/callback',[GoogleController::class, 'handleFacebookCallback']);

//for Twitter
Route::get('auth/twitter/redirect',[GoogleController::class, 'redirectToTwitter'])->name('redirect-to-twitter');
Route::get('auth/twitter/callback',[GoogleController::class, 'handleTwitterCallback']);
