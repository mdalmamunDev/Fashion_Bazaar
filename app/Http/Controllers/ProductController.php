<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller {

    public function showOne($id) {
        $data['product'] = Product::findOrFail($id);
        return view('frontend.product', $data);
    }

    public function showList() {
        $products = Product::select('id', 'name', 'price', 'img')
            ->where('status', '!=', 0)
            ->get();
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
            $product->name = $request->input('name');
            $product->details = $request->input('details');
            $product->category_id = $request->input('category_id'); // Save category_id
            $product->price = $request->input('price');
            $product->brand = $request->input('brand');
            $product->img = $imagePath;
            $product->user_id = Auth::id();

            $product->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Product created successfully.');
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
            $product->name = $request->input('name');
            $product->details = $request->input('details');
            $product->category_id = $request->input('category_id'); // Update category_id
            $product->price = $request->input('price');
            $product->brand = $request->input('brand');
            $product->user_id = Auth::id(); // Update the user_id if needed

            $product->save();

            return redirect()->route('admin.pro.list')
                ->with('success', 'Product updated successfully.');
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

            return redirect()->route('admin.pro.list')
                ->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
