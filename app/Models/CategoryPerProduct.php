<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CategoryPerProduct extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $fillable = ['product_id', 'category_id'];
    public function product(){
    	return $this->belongsTo(Product::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
