<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //Home page function
    public function home(){
        return view('Home');

    }

    // About page function
    public function About(){
        return view('About');
}


// Contact page function
    public function Contact(){
        return view('Contact');
}

}