<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
   
    

    public function welcome()
   {
        $data =[
            'title' => 'Welcome'
        ];

     return view('welcome', $data);
   }

    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        return view('home', $data);
    }
}
