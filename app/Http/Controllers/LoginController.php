<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password')))
        {
            if(Auth::user()->role == 'Admin')
            {
                return redirect()->route('admin.index');
            }
            else
            {
                return redirect()->route('bookings-user.index');
            }
        }
        return redirect('/login')->with('error', 'Your email and password are invalid!');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }

}
