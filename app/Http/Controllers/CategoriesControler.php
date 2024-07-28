<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesControler extends Controller
{

    public function index(){
        $data['categories'] = Category::all();
        return view('backend.categoryList', $data);
    }

    public function create(){
        return view('backend.addEditCategory');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:255',
            'details' => 'sometimes',
        ]);

        $category = new Category();
        $category->category_name =  $request->input('name');
        $category->details = $request->input('details');
        $category->status = $request->input('available') == 'yes' ? 1 : 0;
        $category->save();

        Toastr::success('New category inserted', 'Successfully Inserted!', ["positionClass" => "toast-top-center"]);
        return redirect()->route('cat.list');

    }

    public function edit($id)
    {
        $data['category'] = Category::where('id', $id)->first();

        return view('backend.addEditCategory', $data);
    }

    public function update(Request $request) {
        $id = request()->input('id');

        $this->validate($request, [
            'id' => 'required',
            'name' => 'required|max:255',
            'details' => 'sometimes',
        ]);

        $category = Category::where('id', $id)->first();

        if ($category){
            $category->category_name =  $request->input('name');
            $category->details = $request->input('details');
            $category->status = $request->input('available') == 'yes' ? 1 : 0;
            $category->update();

            Toastr::success('The category has been updated', 'Successfully Updated!', ["positionClass" => "toast-top-center"]);
            return redirect()->route('cat.list');
        }

        Toastr::error('The category is not found', 'Not Found!', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function delete($id) {
        $category = Category::where('id', $id)->first();

        if ($category){
            $category->delete();

            Toastr::success('The category has been deleted', 'Successfully Deleted!', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }

        Toastr::error('The category is not found', 'Not Found!', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }
}
