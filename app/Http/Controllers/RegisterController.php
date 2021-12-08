<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
            'phone' => 'required|numeric',
            'dateBirth' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->dateBirth = $request->dateBirth;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->save(); 
        return redirect('/login');
    }
}
