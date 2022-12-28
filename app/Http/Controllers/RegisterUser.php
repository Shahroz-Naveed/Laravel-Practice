<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterUser extends Controller
{
    public function index()
    {
        return view('form') ;
    }
    public function GetUser(Request $request){
       $request->validate(
        [
        'name'  => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'confirm' =>'same:password'
        ]
       );
        print_r($request->all());
    }
}
