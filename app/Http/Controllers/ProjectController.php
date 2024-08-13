<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    

    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }
    
   
    // public function show_projects()
    // {
    //     $projects = Project::with('user')->get(); // Retrieve all projects with their associated user
    //     return view('projects.show', compact('projects'));
    // }
   

    public function store(Request $request)
    {
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // $data['status'] = Project::STATUS_PENDING;
    // $data['user_id'] = auth()->id();  // Ensure the user_id is set

    // Project::create($data);

    return redirect()->route('projects.index')->with('success', 'Project submitted for validation.');
}
}

