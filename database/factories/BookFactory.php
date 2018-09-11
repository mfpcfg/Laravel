<?php

use Faker\Generator as Faker;


$factory->define(App\Book::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ru_RU');
     return [
        'b_name' => $faker->text($maxNbChars = 20) ,
        'price' =>  $faker->numberBetween($min = 50, $max = 500),
        'pages' =>  $faker->numberBetween($min = 30, $max = 400),
        'b_slug' => $faker->slug,
        'language' => $faker->randomElement($array = array ('UKR','RUS','US')),
        'status' =>  $faker->boolean ,
    ];
});

 $factory->define(App\Author::class, function (Faker $faker) {
 	$faker = \Faker\Factory::create('ru_RU');
     return [
        'a_name' => $faker->name,
        'a_slug' => $faker->slug,
        'alive' =>  $faker->boolean ,
    ];
});

$factory->define(App\Genre::class, function (Faker $faker) {
     return [
        'g_name' => $faker->name,
        'g_slug' => $faker->slug,
    ];
});

