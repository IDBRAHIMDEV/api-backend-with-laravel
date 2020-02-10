<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->sentence(20),
        'article_id' => rand(1, 100),
        'user_id' => rand(1, 5),
    ];
});
