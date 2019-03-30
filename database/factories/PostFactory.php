<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(10),
        'content' => $faker->realText(200),
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->realText(100),
    ];
});
