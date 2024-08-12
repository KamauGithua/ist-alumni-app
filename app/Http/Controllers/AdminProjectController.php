<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', Project::STATUS_PENDING)->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function validateProject(Project $project)
    {
        $project->update(['status' => Project::STATUS_PUBLISHED]);

        return redirect()->route('admin.projects.index')->with('success', 'Project validated and published.');
    }
}
