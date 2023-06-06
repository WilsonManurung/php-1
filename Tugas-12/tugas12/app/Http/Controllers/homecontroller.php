<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //

    public function home()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home', $data);
    }
}
