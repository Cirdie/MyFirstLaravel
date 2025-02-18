<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // ✅ Prevent admins from accessing User Dashboard
        if (Auth::user()->user_type !== 'user') {
            return redirect()->route('admin.dashboard')->with('error', 'Access denied.');
        }

        return view('user.dashboard');
    }
}
