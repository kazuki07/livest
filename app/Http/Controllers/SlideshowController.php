<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    public function index()
    {
        $images = ['1.jpg', '2.jpg', '3.jpg',];
        return view('slideshow', compact('images'));
    }
}
