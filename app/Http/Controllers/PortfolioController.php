<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PortfolioSubmittedForApproval;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class PortfolioController extends Controller
{
    use AuthorizesRequests;

//     public function index()
// {
//     // $portfolios = Portfolio::where('user_id', auth()->id())->get();
//     return view('portfolios.index', compact('portfolios'));
// }

public function show(Portfolio $portfolio)
{
    $this->authorize('view', $portfolio);
    return view('portfolios.show', compact('portfolio'));
}
    
//     public function create()
// {
//     return view('portfolios.create');
// }

// public function store(Request $request)
// {
//     $validated = $request->validate([
//         'basic_info' => 'required|string',
//         'education' => 'required|string',
//         'work_experience' => 'required|string',
//         'skills' => 'required|string',
//         'personal_projects' => 'required|string',
//     ]);

//     $portfolio = new Portfolio($validated);
//     // $portfolio->user_id = auth()->id();
//     // $portfolio->user_id = auth()->id();

//     $portfolio->save();

//     return redirect()->route('portfolios.show', $portfolio);

//     // Validation and portfolio creation

//     // Send notification to admin for approval
//     $admins = User::where('role', 'admin')->get();
//     Notification::send($admins, new PortfolioSubmittedForApproval($portfolio));

//     return redirect()->route('portfolios.show', $portfolio);
// }

public function store(Request $request)
    {
        $request->validate([
            'bio' => 'required|string',
            'education' => 'required|string',
            'work_experience' => 'required|string',
            'skills' => 'required|string',
            'projects' => 'required|string',
            // 'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $portfolio = new Portfolio();
        $portfolio->basic_info = $request->basic_info;
        $portfolio->education = $request->education;
        $portfolio->work_experience = $request->work_experience;
        $portfolio->skills = $request->skills;
        $portfolio->personal_projects = $request->personal_projects;

        // if ($request->hasFile('profile_picture')) {
        //     $filename = $request->file('profile_picture')->store('profile_pictures', 'public');
        //     $portfolio->profile_picture = $filename;
        // }

        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

public function edit(Portfolio $portfolio)
{
    $this->authorize('update', $portfolio);

    return view('portfolios.edit', compact('portfolio'));
}

public function update(Request $request, Portfolio $portfolio)
{
    $this->authorize('update', $portfolio);

    $validated = $request->validate([
        'basic_info' => 'required|string',
        'education' => 'required|string',
        'work_experience' => 'required|string',
        'skills' => 'required|string',
        'personal_projects' => 'required|string',
    ]);

    $portfolio->update($validated);

    return redirect()->route('portfolios.show', $portfolio);
}

public function approve(Portfolio $portfolio)
{
    $this->authorize('approve', $portfolio);

    $portfolio->is_approved = true;
    $portfolio->save();

    return redirect()->route('portfolios.index')->with('status', 'Project approved');
}

}
