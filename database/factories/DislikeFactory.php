<?php

use App\User;
use App\Article;
use App\Dislike;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Dislike::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
        'dislikeable_id' =>  function(){
            return factory(Article::class)->create()->id;
        },
        'dislikeable_type' =>  function(){
            return factory(Article::class);
        }
    ];
});
