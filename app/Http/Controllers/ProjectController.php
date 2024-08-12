<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    

    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

   

    public function store(Request $request)
    {
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // $data['status'] = Project::STATUS_PENDING;
    $data['user_id'] = auth()->id();  // Ensure the user_id is set

    // Project::create($data);

    return redirect()->route('projects.index')->with('success', 'Project submitted for validation.');
}
}

