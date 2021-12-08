<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanParkingController extends Controller
{
    public function index()
    {
        return view('users.halamanparkir');
    }
}
