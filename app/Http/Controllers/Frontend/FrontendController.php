<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\User;
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

        $data['categories'] = Category::where('status', '!=', 0)->get();

        $data['testimonials'] = Testimonial::take(10)
            ->orderBy('likes', 'desc')
            ->get();

        return view('frontend.home', $data);
    }

    public function blog() {
        return view('frontend.blog');
    }

    public function contact() {
        $data['resentProducts'] = Product::select('id', 'name', 'details', 'img', 'created_at')
            ->where('status', '!=', 0)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('frontend.contact', $data);
    }

    public function joinUs(Request $request) {
        return view('backend/auth/signup', ['email' => $request->email]);
    }


    public function prosByCat($id) {
        $cat = Category::findOrFail($id);
        $data['category_name'] = $cat->category_name;
        $data['products'] = $cat->products()->paginate(9);;
        return view('frontend.productsByCategory', $data);
    }

    public function profile($id) {
        if (auth()->id() != $id) return redirect()->to('/');

        $data['user'] = User::findOrFail($id);
        $data['activities'] = Testimonial::where('user_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.profile', $data);
    }
}
