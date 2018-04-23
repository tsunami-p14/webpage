<?php

use Faker\Generator as Faker;

$factory->define(\App\I_category::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->realText($maxNbChar=20,$indexSize=1),
    ];
});

$factory->define(\App\I_function::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->realText($maxNbChar=20,$indexSize=1),
    ];
});

$factory->define(\App\M_i_category::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->realText($maxNbChar=20,$indexSize=1),
        'infor'=>$faker->realText($maxNbChar=20,$indexSize=1),
        'sort_order'=>$faker->numberBetween($min = 1, $max = 999),
    ];
});

$factory->define(\App\M_i_category_dtl::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->realText($maxNbChar=20,$indexSize=1),
        'infor'=>$faker->realText($maxNbChar=20,$indexSize=1),
    ];
});

$factory->define(\App\M_i_function_dtl::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->realText($maxNbChar=20,$indexSize=1),
        'infor'=>$faker->realText($maxNbChar=20,$indexSize=1),
    ];
});

$factory->define(\App\M_maker::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->company,
        'name_a'=>$faker->company,
        'infor'=>$faker->realText($maxNbChar=20,$indexSize=1),
    ];
});
