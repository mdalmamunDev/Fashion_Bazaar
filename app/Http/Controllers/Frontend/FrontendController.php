<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $data['products'] = Product::select('id', 'name', 'price', 'img', 'dis_rate')
            ->where('status', '!=', 0)
            ->orderBy('dis_rate', 'desc')
            ->take(6)
            ->get();
        $data['disProducts'] = Product::select('id', 'name', 'details', 'price', 'img', 'dis_rate')
            ->where('status', '!=', 0)
            ->where('dis_rate', '!=', 0)
            ->orderBy('dis_rate', 'desc')
            ->take(5)
            ->get();
        $data['resentProducts'] = Product::select('id', 'name', 'details', 'img', 'created_at')
            ->where('status', '!=', 0)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('frontend.home', $data);
    }

    public function blog() {
        return view('frontend.blog');
    }

    public function contact() {
        return view('frontend.contact');
    }
}
