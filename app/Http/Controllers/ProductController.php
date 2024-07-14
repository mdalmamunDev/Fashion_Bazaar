<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller {

    public function showOne($id) {
        $data['product'] = Product::where('id', $id)->first();

        return view('frontend.product', $data);
    }

    public function showList() {
        $products = Product::all();
        return view('frontend.products', compact('products'));
    }
    public function showListBack() {
        $products = Product::all();
        return view('backend.product.productsTable', compact('products'));
    }

    public function add() {
        return view('backend.product.addEditProduct');
    }

    public function store(Request $request) {
        try {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string|max:255',
                'details' => 'required|string',
                'category' => 'required|string|max:255',
                'price' => 'required|numeric',
                'brand' => 'nullable|string|max:255', // Validate brand
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image
            ]);

            // Handle the file upload if an image is provided
            $imagePath = null;
            if ($request->hasFile('img')) {
                $imagePath = $request->file('img')->store('images', 'public');
            }

            // Create a new product instance and save it to the database
            $product = new Product();
            $product->name = $request->input('name');
            $product->details = $request->input('details');
            $product->category = $request->input('category');
            $product->price = $request->input('price');
            $product->brand = $request->input('brand'); // Save brand
            $product->img = $imagePath; // Save image path if available
            $product->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    public function edit($id) {
        $data['product'] = Product::where('id', $id)->first();
        return view('backend.product.addEditProduct', $data);
    }

    public function update(Request $request) {
        try {
            $id = $request->input('id');

            $request->validate([
                'name' => 'required|string|max:255',
                'details' => 'required|string',
                'category' => 'required|string|max:255',
                'price' => 'required|numeric',
                'brand' => 'nullable|string|max:255', // Validate brand
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image
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
            $product->category = $request->input('category');
            $product->price = $request->input('price');
            $product->brand = $request->input('brand');

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
