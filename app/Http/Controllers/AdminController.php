<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showSignupForm()
    {
        return view('admin-signup');
    }

    public function showLoginForm()
    {
        return view('admin-login');
    }

    public function showDashboard()
    {
        return view('admin-dashboard');
    }
    
    public function showEditProduct()
    {
        return view('admin-edit-product');
    }
}
