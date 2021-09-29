<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name(),
        'edad' => mt_rand(17, 50)
    ];
});
