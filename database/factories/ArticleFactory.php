<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(20),
        'category_id' => rand(1, 10),
        'user_id' => rand(1, 5),
    ];
});
