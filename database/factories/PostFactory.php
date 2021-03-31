<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'content' =>$faker->paragraph(),
        'thumbnail' => "https://source.unsplash.com/random",
        'subCategoryId' => $faker->numberBetween(1,17),
        'created_at' => $faker->dateTimeBetween($startDate = '-3 Months', $endDate = 'now')
    ];
});
