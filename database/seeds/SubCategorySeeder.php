<?php

use App\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subCategory = [
            ['subCategory' => 'eastern' , 'categoryId' => 1],
            ['subCategory' => 'western' , 'categoryId' => 1],
            ['subCategory' => 'international' , 'categoryId' => 1],
            ['subCategory' => 'cricket' , 'categoryId' => 2],
            ['subCategory' => 'football' , 'categoryId' => 2],
            ['subCategory' => 'others' , 'categoryId' => 2],
            ['subCategory' => 'newShop' , 'categoryId' => 3],
            ['subCategory' => 'newProduct' , 'categoryId' => 3],
            ['subCategory' => 'car' , 'categoryId' => 4],
            ['subCategory' => 'van' , 'categoryId' => 4],
            ['subCategory' => 'moterbike' , 'categoryId' => 4],
            ['subCategory' => 'bicycle' , 'categoryId' => 4],
            ['subCategory' => 'others' , 'categoryId' => 4],
            ['subCategory' => 'nintavur' , 'categoryId' => 6],
            ['subCategory' => 'hathees' , 'categoryId' => 7],
            ['subCategory' => 'bayan' , 'categoryId' => 7],
            ['subCategory' => 'others' , 'categoryId' => 8],
        ];

        foreach($subCategory as $category){
            SubCategory::create($category);
        }

    }
}
