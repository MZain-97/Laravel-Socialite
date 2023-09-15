<?php

use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\InterestController;
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
Route::get('auth/google/redirect',[AuthLoginController::class, 'redirectToGoogle'])->name('redirect-to-google');
Route::get('auth/google/callback',[AuthLoginController::class, 'handleGoogleCallback']);

//for GitHub
Route::get('auth/github/redirect',[AuthLoginController::class, 'redirectToGithub'])->name('redirect-to-github');
Route::get('auth/github/callback',[AuthLoginController::class, 'handleGithubCallback']);

//for Facebook
Route::get('auth/facebook/redirect',[AuthLoginController::class, 'redirectToFacebook'])->name('redirect-to-facebook');
Route::get('auth/facebook/callback',[AuthLoginController::class, 'handleFacebookCallback']);

//for Twitter
Route::get('auth/twitter/redirect',[AuthLoginController::class, 'redirectToTwitter'])->name('redirect-to-twitter');
Route::get('auth/twitter/callback',[AuthLoginController::class, 'handleTwitterCallback']);


Route::get('interest', [InterestController::class ,'index'])->middleware('auth');
Route::post('interest', [InterestController::class ,'userInterest'])->name('interests');
















