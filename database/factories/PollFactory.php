<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Poll::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(50)
    ];
});
$factory->define(\App\Question::class, function (Faker $faker) {
    $poll_ids = \Illuminate\Support\Facades\DB::table('polls')->pluck('id')->all();
    return [
        'title' => $faker->realText(50),
        'question' => $faker->realText(500),
        'poll_id' => $faker->randomElement($poll_ids)
    ];
});
$factory->define(\App\Answer::class, function (Faker $faker) {
    $question_ids = \Illuminate\Support\Facades\DB::table('questions')->pluck('id')->all();
    return [
        'answer' => $faker->realText(500),
        'question_id' => $faker->randomElement($question_ids)
    ];
});
