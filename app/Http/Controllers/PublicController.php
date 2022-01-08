<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller for views
class PublicController extends Controller
{
    // method to get to index page
    public function index()
    {
        return view('AllUsers.index');
    }

    // method to get to about page
    public function about()
    {
        return view('AllUsers.about');
    }

    // method to get to contact page
    public function contact()
    {
        return view('AllUsers.contact');
    }
}
