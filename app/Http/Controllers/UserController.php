<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index($userId)
    {
        $data['user'] = User::findOrFail($userId);
        return view('backend.user.profile', $data);
    }

    public function showList()
    {
//        $products = Product::select('id', 'name', 'price', 'img')
//            ->where('status', '!=', 0)
//            ->get();
//        return view('frontend.products', compact('products'));
    }

    public function create()
    {
        return view('backend.auth.signup');
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:6|confirmed',
                'mobile' => 'required|string|max:15',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bio' => 'nullable|string',
                'location' => 'nullable|string|max:255',
                'function' => 'nullable|string|max:255',
            ]);


            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->mobile = $request->mobile;
            $user->bio = $request->bio;
            $user->location = $request->location;
            $user->function = $request->function;

            if ($request->hasFile('img')) {
                $user->img = $request->file('img')->store('images', 'public');
            }

            $user->save();

            return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function edit($id)
    {
        $data['types'] = [1 => 'Super Admin', 2 => 'Admin', 3 => 'Regular User'];
        $data['user'] = User::findOrFail($id);
        return view('backend.user.updateUser', $data);
        dd($data);
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $request->id,
                'mobile' => 'required|string|max:15',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bio' => 'nullable|string',
                'location' => 'nullable|string|max:255',
                'function' => 'nullable|string|max:255',
                'old_password' => 'nullable|string|min:6',
                'password' => 'nullable|string|min:6|confirmed',
            ]);

            $user = User::findOrFail($request->id);

            // Check if the old password is provided and is correct
            if ($request->filled('old_password')) {
                if (!Hash::check($request->old_password, $user->password)) {
                    throw ValidationException::withMessages([
                        'old_password' => 'The provided password does not match your current password.',
                    ]);
                }

                // If old password is correct and new password is provided, update the password
                if ($request->filled('password')) {
                    $user->password = Hash::make($request->password);
                }
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->bio = $request->bio;
            $user->location = $request->location;
            $user->function = $request->function;

            if ($request->hasFile('img')) {
                $user->img = $request->file('img')->store('images', 'public');
            }

            $user->save();

            return redirect()->route('user.edit', $user->id)->with('success', 'User updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function delete($id)
    {
//        try {
//            $product = Product::findOrFail($id);
//
//            // Delete the image if it exists
//            if ($product->img) {
//                Storage::disk('public')->delete($product->img);
//            }
//
//            // Delete the product from the database
//            $product->delete();
//
//            return redirect()->route('admin.pro.list')
//                ->with('success', 'Product deleted successfully.');
//        } catch (\Exception $e) {
//            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
//        }
    }
}
