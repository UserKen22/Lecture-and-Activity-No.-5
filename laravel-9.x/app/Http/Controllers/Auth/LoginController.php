<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function create()
    {
        // Not applicable for login
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
    }

    public function show($id)
    {
        // Not applicable for login
    }

    public function edit($id)
    {
        // Not applicable for login
    }

    public function update(Request $request, $id)
    {
        // Not applicable for login
    }

    public function destroy($id)
    {
        // Not applicable for login
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

