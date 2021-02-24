<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = ['Mans Fashion', 'Mobile Devices', 'Accessories'];
    	foreach($categories as $category){
    		Category::create([
	        	'title' => $category
	        ]);
    	} 
    }
}
