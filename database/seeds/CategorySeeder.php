<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories =[
            ['category' => 'news'],
            ['category' => 'sports'],
            ['category' => 'adds'],
            ['category' => 'buy&sale'],
            ['category' => 'socialTv'],
            ['category' => 'janaza'],
            ['category' => 'islam'],
            ['category' => 'others'],
            ['category' => 'todayNintavur'],
        ];

        foreach($categories as $category){
            Category::create($category);
        }

    }
}
