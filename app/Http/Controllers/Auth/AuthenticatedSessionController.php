<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Else_;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if($request->user()->usertype === 'super-admin')
        {
            return redirect('superadmin/dashboard');
        } 
        elseif($request->user()->usertype === 'admin')
        {
            return redirect('admin/dashboard');

        }
        elseif($request->user()->usertype === 'employer')
        {
            return redirect('employer/dashboard');

        }
        elseif($request->user()->usertype === 'alumni')
        {
            return redirect('alumni/dashboard');

        }
        

            return redirect()->intended(route('dashboard'));
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
