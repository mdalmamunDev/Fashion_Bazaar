<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $data['products'] = Product::take(6)->get();
        return view('frontend.home', $data);
    }
}
