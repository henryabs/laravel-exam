<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'content', 'image'];
    public function procat(){
    	return $this->hasOne(CategoryPerProduct::class, 'product_id', 'id');
    }
}
