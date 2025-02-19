<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        // ✅ Prevent users from accessing Admin Dashboard
        if (Auth::user()->user_type !== 'admin') {
            return redirect()->route('user.dashboard')->with('error', 'Access denied.');
        }

        return view('admin.reports');
    }
}
