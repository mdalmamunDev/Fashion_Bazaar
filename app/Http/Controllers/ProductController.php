<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller {

    public function showOne($id) {
//        App::setLocale('bn');

        $product = Product::findOrFail($id);

        $allReviews = $product->reviews;

        $reviewCount = $allReviews->count();
        $averageRating = $allReviews->avg('stars');

        $starDistribution = [];
        if ($reviewCount > 0)
            for ($i = 5; $i > 0; $i--) {
                $starDistribution[$i] = ($allReviews->where('stars', $i)->count() / $reviewCount) * 100;
            }

        $reviews = $product->reviews()->orderBy('created_at', 'desc')->paginate(env('REVIEW_LIM'));
        $crrUserRev = Auth::check() ? $reviews->firstWhere('user_id', auth()->id()) : null;

        return view('frontend.product', [
            'product' => $product,
            'reviews' => $reviews,
            'reviewCount' => $reviewCount,
            'averageRating' => $averageRating,
            'starDistribution' => $starDistribution,
            'crrUserRev' => $crrUserRev,
        ]);
    }


    public function showList() {
        $products = Product::select('id', 'name', 'price', 'img', 'dis_rate')
            ->where('status', '!=', 0)
            ->paginate(9);
        return view('frontend.products', compact('products'));
    }

    public function showListBack() {
        $products = Product::all();
        return view('backend.product.productList', compact('products'));
    }

    public function add() {
        $data['categories'] = Category::select('id', 'category_name')->get();
        return view('backend.product.addEditProduct', $data);
    }

    public function store(Request $request) {
        try {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string|max:255',
                'details' => 'required|string',
                'category_id' => 'required|exists:categories,id', // Validate category_id
                'price' => 'required|numeric',
                'brand' => 'nullable|string|max:255',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Handle the file upload if an image is provided
            $imagePath = null;
            if ($request->hasFile('img')) {
                $imagePath = $request->file('img')->store('images', 'public');
            }

            $product = new Product();
            $product->fill($request->all());
            $product->img = $imagePath;
            $product->user_id = Auth::id();

            $product->save();

            // Redirect back with a success message
            Toastr::success('New product inserted', 'Successfully Inserted!', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.pro.list');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function edit($id) {
        $data['product'] = Product::findOrFail($id);
        $data['categories'] = Category::select('id', 'category_name')->get();
        return view('backend.product.addEditProduct', $data);
    }

    public function update(Request $request) {
        try {
            $id = $request->input('id');

            $request->validate([
                'name' => 'required|string|max:255',
                'details' => 'required|string',
                'category_id' => 'required|exists:categories,id', // Validate category_id
                'price' => 'required|numeric',
                'brand' => 'nullable|string|max:255',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $product = Product::findOrFail($id);

            // Handle the file upload if a new image is provided
            if ($request->hasFile('img')) {
                // Delete the old image if it exists
                if ($product->img) {
                    Storage::disk('public')->delete($product->img);
                }

                // Store the new image
                $imagePath = $request->file('img')->store('images', 'public');
                $product->img = $imagePath;
            }

            // Update product fields
            $product->fill($request->all());
            $product->user_id = Auth::id(); // Update the user_id if needed

            $product->save();

            Toastr::success('The product has been updated', 'Successfully Updated!', ["positionClass" => "toast-top-center"]);
            return redirect()->route('admin.pro.list');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function delete($id) {
        try {
            $product = Product::findOrFail($id);

            // Delete the image if it exists
            if ($product->img) {
                Storage::disk('public')->delete($product->img);
            }

            // Delete the product from the database
            $product->delete();

            Toastr::success('The product has been deleted', 'Successfully Deleted!', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
