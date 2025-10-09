<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
   public function dashboard()
    {
        $productsCount = Product::count(); // Total products
        $usersCount = User::count();       // Total users
        $recentProducts = Product::latest()->take(5)->get(); // Last 5 products

        return view('admin.dashboard', compact('productsCount', 'usersCount', 'recentProducts'));
    }

}
