<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
  $faker  ->  addProvider(new \Faker\Provider\zh_TW\Person($faker));
    return [
        'name' => $faker  ->  name,
        'price' => $faker ->
            randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
        'gradation' => $faker -> numberBetween($min = 1, $max = 100)
    ];
});
