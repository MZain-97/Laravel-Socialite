<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        return view('interest');
    }

    public function userInterest(Request $request)
    {
        $user = auth()->user();

        if (!$user) {
            // Handle the case where the user is not authenticated
            return redirect('/login'); // Redirect to the login page or handle as needed
        }

        $selectedInterest =$request->input('interests', []);
        $validatedData = $request->validate([
            'interests' => 'required|array|min:3',
            'interests.*' => 'exists:interests,id',
        ]);




        $user->interests()->sync($validatedData['interests']);


        return redirect('/');
    }
}
