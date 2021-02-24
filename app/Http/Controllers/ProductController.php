<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryPerProduct;
class ProductController extends Controller
{
    public function index(){
    	$products = Product::all();
        $categories = Category::all();
        $products_softdeleted = Product::onlyTrashed()->get();
    	return view('admin.product.index', ['products' => $products, 'only_trashed' => $products_softdeleted, 'categories' => $categories]);
    }

    public function create(){
        $categories = Category::all();
    	return view('admin.product.create', ['categories' => $categories]);
    }

    public function store(Request $request){

    	$validated = $request->validate([
    		'title' => 'required|unique:products|max:55',
            'content' => 'required',
            'image' => 'required'
    	]);
        $image = $request->file('image');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'media/product/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $store_product = Product::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $image_url
            ]);
            if($store_product){
                $product_id = $store_product->id;
                $category_id =$request->category_id;
                if(CategoryPerProduct::create(['product_id' => $product_id, 'category_id' => $category_id])){
                    $notification = ['message' => 'Success', 'alert-type' => 'success'];
                        return redirect()->route('product.index')->with($notification);
                }else{
                    $notification = ['message' => 'Error', 'alert-type' => 'error'];
                return redirect()->route('product.index')->with($notification);
                }
            }else{
                $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
                return redirect()->route('product.index')->with($notification);
            }
            
        }else{
            $store_product = Product::create([
                'title' => $request->title,
                'content' => $request->content
            ]);
            if($store_product){
                $product_id = $store_product->id;
                $category_id =$request->category_id;
                if(CategoryPerProduct::create(['product_id' => $product_id, 'category_id' => $category_id])){
                    $notification = ['message' => 'Success', 'alert-type' => 'success'];
                        return redirect()->route('product.index')->with($notification);
                }else{
                    $notification = ['message' => 'Error', 'alert-type' => 'error'];
                return redirect()->route('product.index')->with($notification);
                }
            }else{
                $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
                return redirect()->route('product.index')->with($notification);
            }
        }

    }

    public function edit($id){
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:55',
            'content' => 'required'
        ]);
        $image = $request->file('image');
        $product = Product::find($request->product_id);
        // return $request->all();

        if($image){
            unlink($product->image);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'media/product/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $update_product = $product->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $image_url
            ]);
            if($update_product){
                $procat = CategoryPerProduct::where('product_id', $request->product_id)->first();
                $procat->category_id = $request->category_id;
                if($procat->save()){
                    $notification = ['message' => 'Product updated successfully', 'alert-type' => 'success'];
                    return redirect()->route('product.index')->with($notification);
                }else{
                    $notification = ['message' => 'Error', 'alert-type' => 'error'];
                    return redirect()->route('product.index')->with($notification);
                }

            }else{
                $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
                return redirect()->route('product.index')->with($notification);
            }
        }else{
            $update_product = $product->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
            if($update_product){
                $procat = CategoryPerProduct::where('product_id', $request->product_id)->first();
                $procat->category_id = $request->category_id;
                if($procat->save()){
                    $notification = ['message' => 'Product updated successfully', 'alert-type' => 'success'];
                    return redirect()->route('product.index')->with($notification);
                }else{
                    $notification = ['message' => 'Error', 'alert-type' => 'error'];
                    return redirect()->route('product.index')->with($notification);
                }

            }else{
                $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
                return redirect()->route('product.index')->with($notification);
            }
        }
    }

    public function delete(Request $request){
        $product = Product::findOrFail($request->product_id);
        if($product->delete()){
            $notification = ['message' => 'Product deleted successfully', 'alert-type' => 'success'];
            return redirect()->route('product.index')->with($notification);
        }else{
            $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('product.index')->with($notification);
        }
    }

    public function restore(Request $request){

        $restore = Product::withTrashed()
        ->where('id', $request->product_id)
        ->restore();
        if($restore){
            $notification = ['message' => 'Product restored successfully', 'alert-type' => 'success'];
            return redirect()->route('product.index')->with($notification);
        }else{
            $notification = ['message' => 'Something went wrong', 'alert-type' => 'error'];
            return redirect()->route('product.index')->with($notification);
        }

    }

    public function show($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.show', ['product' => $product, 'categories' => $categories]);
    }
}
