<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Dashboard()
    {
         if(!Auth::check()) return redirect('/');
        return Auth::user()->type === 'admin'
            ? view('admin.dashboard')
            : view('dashboard');
    }
}
