<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
        'name' =>$faker->word,
        'detail'=>$faker->paragraph,
        'price'=> $faker->numberBetween(100,1000),
        'img'=>$faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'stock'=> $faker->randomDigit,
        'discount'=> $faker->numberBetween(2,30),
    ];
});
