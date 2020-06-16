<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'type' => 'user',
        'mobile' => mt_rand(1000000000,9000000000),
        'image' => '',
        'status' => 0
    ];
});
