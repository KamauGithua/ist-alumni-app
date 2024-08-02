<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobListing;

class HomeController extends Controller
{
    public function home()
    {
        $job = JobListing::all();
        return view('home.index',compact('job'));
    }

    public function login_home()
    {
        $job = JobListing::all();
        return view('home.index',compact('job'));
    }
} 
