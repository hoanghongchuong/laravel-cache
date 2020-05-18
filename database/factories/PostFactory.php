<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
    	'user_id' => App\User::all()->random()->id,
        'title' => $faker->title,
        'image' => $faker->image,
        'content' => $faker->title,       
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
