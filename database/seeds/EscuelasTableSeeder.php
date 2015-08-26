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
    }
}
