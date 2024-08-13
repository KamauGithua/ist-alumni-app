<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobListing;
use App\Models\Project;

class HomeController extends Controller
{
    public function home()
    {
        $project = Project::all();
        $job = JobListing::all();
        $category = Category::all();
        return view('home.index',compact('job','project','category'));
    }

    
       
    

    public function login_home()
    {
        $job = JobListing::all();
        $project = Project::all();
        $category = Category::all();
        return view('home.index',compact('job','project','category'));

    }

    public function job_details($id)
    {
        
        $job = JobListing::find($id);

        return view('home.job_details',compact('job'));
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id()){
            $user=Auth::user();
            $job=JobListing::find($id);

            $cart=new Cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->Job_title=$job->title;
            $cart->pay=$job->pay;
            $cart->category=$job->category;
            $cart->type=$job->type;
            $cart->location=$job->location;
            $cart->image=$job->image;
            $cart->Job_id=$job->id;

            $cart->save();

            return redirect()->back();




        }
        else{
            return redirect('login');
        }

    }
} 
