<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Review;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $reviewCount = Review::count();
        $paymentCount = Payment::count();
        $shipmentCount = Shipment::count();
        return view('Admin.index' , compact(
        'productCount', 
        'categoryCount',
        "userCount",
        "reviewCount",
        "paymentCount",
        "shipmentCount"
        )
    );
    }
}
