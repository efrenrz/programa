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

$factory->define(programa\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});


$factory->define(programa\Escuelas::class, function ($faker) {
    return [
        'nombre'                        => $faker->catchPhrase,
        'titular'                       => $faker->firstName . " " .$faker->lastName . " " .$faker->lastName ,
        'tiempo_en_cargo'               => $faker->randomDigit(8),
        'designacion'                   => $faker->sentence(3),
        'terminacion'                   => '2016-12-12',
        'organigrama'                   => $faker->sentence(1),
        'observaciones_generales'       => $faker->paragraph(rand(7,8)),
        //datos financieros
        'presupuesto_estatal'           => rand(3000000,20000000),
        'presupuesto_federal'           => rand(7000000,50000000),
        'ingresos_propios'              => rand(7000000,10000000),
        'otros_estatales'               => rand(0,2000000),
        'otros_federales'               => rand(0,7000000),
        'avance_gastos'                 => rand(60,100),
        'total_nomina_mensual'          => rand(2000000,7000000),
        'total_personal'                => rand(12,500),
        'nomina_administrativa'         => $faker->sentence(1),
        'nomina_academica_plaza'       => $faker->sentence(1),
        'nomina_honorarios'             => $faker->sentence(1),
        'observaciones_financieras'     => $faker->paragraph(rand(15,20)),
        //infraestructura
        'recursos_obra'                 => rand(1000000,200000),
        'origen_recursos'               => $faker->randomElement(['federal','estatal','propios','inversion propia']),
        'porcentaje_avance'             => rand(40,100),
        'recursos_ejercer'              => rand(100000,30000000),
        'fecha_terminacion'             => '2015-12-12',
        'observaciones_infraestructura' => $faker->paragraph(rand(15,30))
    ];
});
