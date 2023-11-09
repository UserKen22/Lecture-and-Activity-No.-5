<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function showRegistrationForm() {
        return view('registration');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user record and save it to the database
        $user = new User([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => bcrypt($validatedData['password']), // Hash the password for security
        ]);
        $user->save();

        // Optionally, log in the user after registration
        auth()->login($user);

        // Redirect to a success page or perform any other desired action
        return redirect()->route('dashboard')->with('success', 'Registration and login successful.');
    }
}
