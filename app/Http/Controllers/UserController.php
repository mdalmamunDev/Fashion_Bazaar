<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($userId)
    {
        // Retrieve the user by ID
        $data['user'] = User::findOrFail($userId);
        // Return a view with the products
        return view('backend.profile', $data);
    }
}
