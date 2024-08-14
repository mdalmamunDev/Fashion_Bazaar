<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesControler extends Controller
{

    public function index(){
        return view('backend.categoryList');
    }

    public function create(){
        return view('backend.addEditCategory');
    }

    public function store(Request $request) {
        try {
            $this->validate($request, [
                'category_name' => 'required|max:255',
                'details' => 'sometimes',
            ]);

            $category = new Category();
            $category->fill($request->all());
            $category->save();

            return response()->json(['success' => true, 'message' => 'Category created successfully.']);
        }catch (\Exception $exception){
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something Wrong'
            ]);
        }
    }

    public function edit($id)
    {
        $data['category'] = Category::where('id', $id)->first();

        return view('backend.addEditCategory', $data);
    }

    public function update(Request $request, $id) {
        try {
            $this->validate($request, [
                'category_name' => 'required|max:255',
                'details' => 'sometimes',
            ]);

            $category = Category::findOrFail($id);
            $category->fill($request->all());
            $category->update();

            return response()->json(['success' => true, 'message' => 'Category updated successfully.']);
        } catch (\Exception $exception) {
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something went wrong'
            ]);
        }
    }

    public function delete($id) {
        try {
            $category = Category::where('id', $id)->first();

            if ($category){
                $category->delete();

                return response()->json(['success' => true, 'message' => 'Category deleted successfully.']);
            }

            return response()->json(['success' => false, 'message' => 'Category not found.']);
        } catch (\Exception $exception) {
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something went wrong'
            ]);
        }
    }



    public function getCategory($id) {
        try {
            $data = Category::where('id', $id)->first();

            $retData = [];

            $retData['status'] = 200;
            $retData['result'] = $data;
            $retData['message'] = 'Successfully category fetched!';

            return response()->json($retData);
        }catch (\Exception $exception){
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something Wrong'
            ]);
        }
    }

    public function getAll(){
        try {

            $categories = Category::all();

            return response()->json(['success' => true, 'message' => 'Category created successfully.', 'result' => $categories]);
        }catch (\Exception $exception){
            return response()->json([
                'data' => $exception->getMessage(),
                'status' => 5000,
                'message' => 'Something Wrong'
            ]);
        }
    }
}
