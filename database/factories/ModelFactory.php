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
        'nomina_academica_plaza'        => $faker->sentence(1),
        'nomina_honorarios'             => $faker->sentence(1),
        'observaciones_financieras'     => $faker->paragraph(rand(15,20)),
        //infraestructura
        'recursos_obra'                 => rand(1000000,200000),
        'origen_recursos'               => $faker->randomElement(['federal','estatal','propios','inversion propia']),
        'porcentaje_avance'             => rand(40,100),
        'recursos_ejercer'              => rand(100000,30000000),
        'fecha_terminacion'             => '2015-12-12',
        'observaciones_infraestructura' => $faker->paragraph(rand(10,11)),
        //observaciones
        'observaciones_convenios'       => $faker->paragraph(rand(10,12)),
        'observaciones_licitaciones'    => $faker->paragraph(rand(10,12)),
        'observaciones_asuntos'         => $faker->paragraph(rand(10,11)),
        'observaciones_representaciones'=> $faker->paragraph(rand(5,6)),
        'observaciones_becas'           => $faker->paragraph(rand(10,12)),
        'observaciones_eventos'         => $faker->paragraph(rand(10,13)),
        'observaciones_oferta'          => $faker->paragraph(rand(7,9)),
        'observaciones_reforma'         => $faker->paragraph(rand(2,10)),
    ];
});


$factory->define(programa\Convenios::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'descripcion' => $faker->sentence(),
        'fecha' => $faker->numerify('####-##-##'),
        'monto' => rand(500000,10000000)
    ];
});
$factory->define(programa\Licitaciones::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'nombre' => $faker->sentence(),
        'descripcion' => $faker->paragraph(rand(3,6)),
        'fecha' => $faker->numerify('#### ## ##')
    ];
});
$factory->define(programa\Asuntos::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'descripcion' => $faker->sentence(),
        'tipo' => $faker->randomElement(['recursos','eleccion','juridico','proyecto','evento']),
        'organismos_relacionados' => $faker->sentence()
    ];
});
$factory->define(programa\Representaciones::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'nombre_representante' => $faker->name,
        'cargo' => $faker->bs,
        'vigencia' => $faker->numerify('#### ## ##'),
        'pendientes' => $faker->sentence()
    ];
});
$factory->define(programa\Becas::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'tipo' => $faker->word,
        'numero_beneficiarios' => rand(10,100000),
        'vigencia' => $faker->numerify('#### ## ##'),
        'monto' => rand(10000,1000000),
        'periodicidad' => $faker->randomElement(['mensual', 'bimensual', 'trimestral', 'cuatrimestral','smestral', 'anual'])
    ];
});
$factory->define(programa\Eventos::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'tipo_evento' => $faker->sentence(),
        'fecha_compromiso'=> $faker->numerify('#### ## ##'),
        'monto_recursos' => rand(30000, 10000000),
    ];
});
$factory->define(programa\Oferta::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'nombre' => $faker->sentence(),
        'tipo' => $faker->randomElement(['maestria', 'diplomado', 'licenciatura', 'curso']),
        'estatus' => $faker->randomElement(['tramite', 'vigente']),
    ];
});
$factory->define(programa\Reforma::class, function ($faker) {
    return [
        'id_escuela' => rand(1,50),
        'impacto'  => $faker->sentence(),
        'descripcion' => $faker->paragraph(3)
    ];
});