<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();
        $categories_softdeleted = Category::onlyTrashed()->get();
    	return view('admin.category.category', ['categories' => $categories, 'only_trashed' => $categories_softdeleted]);
    }

    public function create(){
    	return view('admin.category.create');
    }

    public function store(Request $request){
    	$validated = $request->validate([
    		'title' => 'required|unique:categories|max:55'
    	]);

    	$store_category = Category::create($request->all());
    	if($store_category){
    		$notification = ['message' => 'Category added successfully', 'alert-type' => 'success'];
            return redirect()->route('category.index')->with($notification);
    	}else{
    		$notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('category.index')->with($notification);	
    	}

    }

    public function edit($id){
    	$category = Category::findOrFail($id);
    	return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request){
    	$validated = $request->validate([
    		'title' => 'required|max:55'
    	]);
    	$category = Category::findOrFail($request->category_id);
    	$update_category = $category->update([
    		'title' => $request->title
    	]);
    	if($update_category){
    		$notification = ['message' => 'Category updated successfully', 'alert-type' => 'success'];
            return redirect()->route('category.index')->with($notification);
    	}else{
    		$notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('category.index')->with($notification);	
    	}
    }

    public function delete(Request $request){
        $category = Category::findOrFail($request->category_id);
        if($category->delete()){
            $notification = ['message' => 'Category deleted successfully', 'alert-type' => 'success'];
            return redirect()->route('category.index')->with($notification);
        }else{
            $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('category.index')->with($notification);
        }
    }

    public function restore(Request $request){

        $restore = Category::withTrashed()
        ->where('id', $request->category_id)
        ->restore();
        if($restore){
            $notification = ['message' => 'Category restored successfully', 'alert-type' => 'success'];
            return redirect()->route('category.index')->with($notification);
        }else{
            $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('category.index')->with($notification);
        }

    }
}
