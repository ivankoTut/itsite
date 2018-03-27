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


$factory->define(App\Note::class, function (Faker $faker) {
    $category = \App\Kategory::all()->pluck('id')->toArray();

    return [
        'kat' => $category[array_rand($category)],
        'url' => str_slug($faker->unique()->name),
        'label' => $faker->name,
        'text' => $faker->text()
    ];
});