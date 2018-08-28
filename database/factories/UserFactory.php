<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Product::class, function (Faker $faker) {
    $title = $faker->name;
    return [
        'title' => $title,
        'price' => $faker->numberBetween(1000, 5000),
        'overview' => $faker->sentence(5),
        'slug' => str_slug($title) . time(),
        'description' => $faker->paragraph(3),
        'image1' => 'products/nivea-body-lotion1513844663.jpg',
        'thumb1' => 'products/thumbs/product-thumb1513844663.jpg',
        'small1' => 'products/smallest/product-small1513844663.jpg',
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'id' => random_int(1, 10)
    ];
});

