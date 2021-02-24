<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryPerProduct;
class CategoriesProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryPerProduct::insert(array(
        	0 => array(
        		'product_id' => 1,
        		'category_id' => 2
        	),
        	1 => array(
        		'product_id' => 2,
        		'category_id' => 1
        	),
        ));
    }
}
