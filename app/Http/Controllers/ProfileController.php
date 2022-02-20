<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    //add
    public function confirm()
    {
        return view('confirm');
    }

    public function index(ProfileRequest $request)
    {
        $rule = [
            'username' => 'required|max:12',
            'password' => 'required|max:16',
            'latitude' => 'required',
            'longitude' => 'required'
        ];
        
        $username = $request->input('username');
        $password = $request->input('password');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        return view('profile.confirm', ['username' => $username], ['password' => $password], ['latitude' => $latitude], ['longitude' => $longitude]);
    }
}
