<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     */
    public function handleGoogleCallback()
    {
        // Retrieve user data from Google
        $googleUser = Socialite::driver('google')->stateless()->user();

        $this->_registerOrLogin($googleUser);

        // Redirect to the home page or any other desired location
        return redirect('/');
    }





    /**
     * Redirect the user to the GitHub authentication page.
     */
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     */
    public function handleGithubCallback()
    {
        // Retrieve user data from GitHub
        $githubUser = Socialite::driver('github')->stateless()->user();

        $this->_registerOrLogin($githubUser);

        // Redirect to the home page or any other desired location
        return redirect('/');
    }







    /**
     * Redirect the user to the Facebook authentication page.
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Obtain the user information from Facebook.
     */
    public function handleFacebookCallback()
    {
        // Retrieve user data from Facebook
        $facebookUser = Socialite::driver('facebook')->stateless()->user();

        $this->_registerOrLogin($facebookUser);

        // Redirect to the home page or any other desired location
        return redirect('/');
    }








    /**
     * Redirect the user to the Twitter authentication page.
     */
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    /**
     * Obtain the user information from Twitter.
     */
    public function handleTwitterCallback()
    {
        // Retrieve user data from Twitter
        $twitterUser = Socialite::driver('twitter')->stateless()->user();

        $this->_registerOrLogin($twitterUser);

        // Redirect to the home page or any other desired location
        return redirect('/');
    }







    protected function _registerOrLogin($data){

        $userData = User::where('email',$data->email)->first();


        if(!$userData){

            // Prepare user data
            $userData = [
                'name' => $data->name,
                'email' => $data->email,
                'provider_token' => $data->token,
            ];
            // Update or create the user by Provider ID
            $user = User::updateOrCreate(['provider_id' => $data->id], $userData);

            // Log the user in
        }
        Auth::login($userData);

    }

}
