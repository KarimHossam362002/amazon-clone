<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('Admin.index' , compact(
        'productCount', 
        'categoryCount',
        "userCount"
        )
    );
    }
}
