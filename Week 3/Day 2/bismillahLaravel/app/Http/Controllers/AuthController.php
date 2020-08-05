<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function registrasi(){
        return view('registrasi');
    }

    public function sendForm(Request $request){
        $nama_lengkap = $request["nama"]." ".$request["nama2"];
        return view('welcome', ["nama" => $nama_lengkap]);
        // return "FORM OK";
    }
}