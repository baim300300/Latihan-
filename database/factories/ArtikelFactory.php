<?php 
use Faker\Generator as Faker;

$factory->define(App\Artikel::class, function(Faker $faker){
	return[
		'judul' => $faker->text(50),
		'body' => $faker->text(200)
	];
});