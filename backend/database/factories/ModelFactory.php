<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Persona::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'paterno' => $faker->lastName,
        'materno' => $faker->lastName,
        'email' => $faker->email,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'titulo' => $faker->sentence(35),
        'id_persona' => factory(App\Persona::class)->create()->id,// este metodo funciona pero hay que ordenar el orden de ejecucion
        //'id_persona' =>App\Persona::all()->random()->id,
        //'id_persona' =>100,
        'descripcion' => $faker->sentence(20),
        'contenido' => $faker->paragraph(100),
        
    ];
});
$factory->define(App\Comentario::class, function (Faker\Generator $faker) {
    return [
        'id_post' => factory(App\Post::class)->create()->id,// este metodo funciona pero hay que ordenar el orden de ejecucion
        'contenido' => $faker->sentence(35),
    ];
});