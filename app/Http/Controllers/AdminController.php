<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function AdminDashboard(){
        return view('admin.admin_dashboard');
    }
}
