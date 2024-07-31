<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['products'] = Product::take(10)->get();
        $data['categories'] = Category::take(10)->get();
        return view('backend.dashboard', $data);
    }
    public function tables(){
        $data['users'] = User::take(15)->get();
        $data['products'] = Product::take(15)->get();
        $data['categories'] = Category::take(15)->get();
        return view('backend.tables', $data);
    }
    public function billing(){
        return view('backend.billing');
    }
}
