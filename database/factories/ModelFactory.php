<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\userinfo::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstNameMale,
        'lastname' => $faker->lastName,
        'age' => rand(18, 65),
        'city' => $faker->city,
        'address' => $faker->address,
        'contactno' => $faker->phoneNumber,
        'gender' => 'Male'
    ];
});