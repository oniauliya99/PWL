<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'konten' => $faker->sentence(),
        'judul' => $faker->sentence(),
        'link' => $faker->sentence()
    ];
});
