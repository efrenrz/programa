<?php

use Illuminate\Database\Seeder;

class EscuelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(programa\Escuelas::class, 50)->create();

        DB::table('convenios')->truncate();
        factory(programa\Convenios::class, 50)->create();

        DB::table('licitaciones')->truncate();
        factory(programa\Licitaciones::class, rand(1,50))->create();

        DB::table('asuntos')->truncate();
        factory(programa\Asuntos::class, rand(1,50))->create();

        DB::table('representaciones')->truncate();
        factory(programa\Representaciones::class, rand(1,50))->create();

        DB::table('becas')->truncate();
        factory(programa\Becas::class, rand(1,50))->create();

        DB::table('eventos')->truncate();
        factory(programa\Eventos::class, rand(1,50))->create();

        DB::table('oferta')->truncate();
        factory(programa\Oferta::class, rand(1,50))->create();
    }
}
