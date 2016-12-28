<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function portfolio()
    {
        return view('portfolio');
    }
    
    public function services()
    {
        return view('services');
    }
    
    public function contact() 
    {
        return view('contact');
    }
    
    public function blog()
    {
        return view('blog');
    }
}