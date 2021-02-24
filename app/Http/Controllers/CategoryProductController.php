<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryPerProduct;
class CategoryProductController extends Controller
{
    public function index(){
        $catpro = CategoryPerProduct::all();
        $catpro_onlyTrashed = CategoryPerProduct::onlyTrashed()->get();
    	return view('admin.categoryproduct.index', ['catpro' => $catpro, 'trashed' => $catpro_onlyTrashed]);
    }

    public function create(){
    	$products = Product::all();
    	$categories = Category::all();
    	return view('admin.categoryproduct.create', ['products' => $products, 'categories' => $categories]);
    }

    public function store(Request $request){
    	$product_id = $request->product_id;
    	$category = $request->category_id;
    	$product_request = CategoryPerProduct::where('product_id', $request->product_id)->get();
    	$catpro_count = CategoryPerProduct::where('product_id', $request->product_id)
    	->where('category_id',$request->category_id)->get();
    	if(count($product_request) <= 0 ){
    		if(count($catpro_count) <= 0){
    		$catpro_store = CategoryPerProduct::create($request->all());
    		if($catpro_store){
		    		$notification = ['message' => 'Product is successfully associated with given category', 'alert-type' => 'success'];
		            return redirect()->route('catpro.index')->with($notification);
		    	}else{
		    		$notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
		            return redirect()->route('catpro.index')->with($notification);	
		    	}

	    	}
    	}else{
    		$notification = ['message' => 'Product has already association with category', 'alert-type' => 'error'];
            return redirect()->route('catpro.index')->with($notification);
    	}
    }

    public function edit($id){
    	$catpro = CategoryPerProduct::find($id);
    	$products = Product::all();
    	$categories = Category::all();
    	return view('admin.categoryproduct.edit', ['catpro' => $catpro, 'categories' => $categories, 'products' => $products]);

    }

    public function update(Request $request){
    	$product_id = $request->product_id;
    	$category_id = $request->category_id;
    	$product = Product::where('id', $product_id)->get();
    	$catpro_count = CategoryPerProduct::where('product_id', $request->product_id)
    	->where('category_id',$request->category_id)->get();
    	if(count($catpro_count) > 0){
			$notification = ['message' => 'This product is already associated to category', 'alert-type' => 'error'];
        	return redirect()->route('catpro.index')->with($notification);
		}else{
			$catpro = CategoryPerProduct::where('product_id', $product_id)->first();
			if($catpro->update(['category_id' => $category_id])){
				$notification = ['message' => 'Product successfully updated association', 'alert-type' => 'success'];
            	return redirect()->route('catpro.index')->with($notification);
			}else{
				$notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            	return redirect()->route('catpro.index')->with($notification);
			}
			
		}

    	
    }

    public function delete(Request $request){
        $catpro = CategoryPerProduct::findOrFail($request->catpro_id);
        if($catpro->delete()){
            $notification = ['message' => 'Category Product deleted successfully', 'alert-type' => 'success'];
            return redirect()->route('catpro.index')->with($notification);
        }else{
            $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('catpro.index')->with($notification);
        }
    }

    public function restore(Request $request){
        $restore = CategoryPerProduct::withTrashed()
        ->where('id', $request->catpro_id)
        ->restore();
        if($restore){
            $notification = ['message' => 'Category Product restored successfully', 'alert-type' => 'success'];
            return redirect()->route('catpro.index')->with($notification);
        }else{
            $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('catpro.index')->with($notification);
        }
    }
}
