<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Admin;

class LoginAdmin extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show(): View
    {
        return view('admin/login');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function store(Request $request): RedirectResponse
    {

        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return  redirect()->route('admin_dashboard');
        } else {
            return redirect()->back()->with('error', 'Your Credintal is invalid');
        }


    }
    public function logout()
    {  Auth::guard('admin')->logout();
        return redirect()->route('login_admin')->with('success', 'You Have Logout Success');

    }

}