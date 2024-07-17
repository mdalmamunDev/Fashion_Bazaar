<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view('backend.dashboard', $data);
    }
    public function tables(){
        return view('backend.tables');
    }
    public function billing(){
        return view('backend.billing');
    }
    public function profile(){
        return view('backend.profile');
    }
}
