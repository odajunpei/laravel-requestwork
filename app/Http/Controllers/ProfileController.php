<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //add
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $username = $request->session()->get('username');
        $password = $request->session()->get('password');
        $latitude = $request->session()->get('latitude');
        $longitude = $request->session()->get('longitude');

        return view('profile.index', ['username' => $username], ['password' => $password], ['latitude' => $latitude], ['longitude' => $longitude]);
    }
}
