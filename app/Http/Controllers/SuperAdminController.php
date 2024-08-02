<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\JobListing;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.index');
    }
    
    public function view_category()
    {
        $data = Category::all();
        return view('superadmin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        toastr()->closeOnHover(true)
        ->closeDuration(5000)
        ->success('Category Added Successfully');
        $category->category_name = $request->category;
        $category->save();

        return redirect()->back();
    }
   
    
    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('superadmin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);

        $data->category_name= $request->category;
        $data->save();

        toastr()->closeOnHover(true)
        ->closeDuration(5000)
        ->success('Category Updated Successfully');

        return redirect('/view_category');
    }
    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        
        toastr()->closeOnHover(true)
        ->closeDuration(5000)
        ->success('Category Deleted Successfully');

        return redirect()->back();
    }


    // JOB LISTINGS
    public function add_job()
    {
        $category = Category::all();
        return view('superadmin.add_job', compact('category'));
    }

    public function upload_job(Request $request)
    {
        $data = new JobListing;

        $data->title = $request->title;
        $data->type = $request->type;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->category = $request->category;
        $data->pay = $request->pay;

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('jobs', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        toastr()->closeOnHover(true)
        ->closeDuration(5000)
        ->success('Job Added Successfully');

        return redirect()->back();

    }

    public function view_job()
    {
        $job = JobListing::paginate(3);
        return view('superadmin.view_job', compact('job'));


    }

    public function delete_job($id)
    {
        $data = JobListing::find($id);

        $image_path = public_path('jobs/'.$data->image);

        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $data->delete();

        toastr()->closeOnHover(true)
        ->closeDuration(5000)
        ->success('Job Deleted Successfully');


        return redirect()->back();
    }

    public function update_job($id)
    {
        $data = JobListing::find($id);

        $category =Category::all();

        return view('superadmin.update_job',compact('data','category'));
    }

    public function edit_job(Request $request,$id)
    {
        $data = JobListing::find($id);

        $data->title = $request->title;
        $data->type = $request->type;
        $data->description = $request->description;
        $data->location = $request->location;
        $data->category = $request->category;
        $data->pay = $request->pay;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientExtension();
            $request->image->move('jobs',$imagename);
            $data->image = $imagename;
        }

        $data->save();

        toastr()->closeOnHover(true)
        ->closeDuration(5000)
        ->success('Job Updated Successfully');


        return redirect('/view_job');
    }

    public function job_search(Request $request)
    {
        $search = $request->search;

        $job = JobListing::where('title','LIKE','%'.$search.'%')
            ->orWhere('category','like','%'.$search.'%')
        ->paginate(3);
       
        
        return view('superadmin.view_job',compact('job'));
    }
}
// side notes

 // if($search)
        //  {$job = JobListing::where('title','like','%'.$search.'%')
        //     ->orWhere('category','like','%'.$search.'%')
        //         ->paginate(3);
        //  }
        //  else{
        //     $job=JobListing::paginate(5);
        //  }