<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // ✅ Prevent users from accessing Admin Dashboard
        if (Auth::user()->user_type !== 'admin') {
            return redirect()->route('user.dashboard')->with('error', 'Access denied.');
        }

        return view('admin.dashboard');
    }
}
