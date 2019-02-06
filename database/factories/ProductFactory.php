<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
        'name' =>$faker->word,
        'detail'=>$faker->paragraph,
        'price'=> $faker->numberBetween(100,1000),
       // 'img'=>$faker->image($dir = '/resources/img', $width = 320, $height = 240), 
        'stock'=> $faker->randomDigit,
        'discount'=> $faker->numberBetween(2,30),
    ];
});
