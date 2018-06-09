<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashbord
    public function dashboard()
    {
        return view('admin.dashboard', [
            'count_categories' => Category::count(),
            'count_products' => Product::count()
        ]);
    }
}
