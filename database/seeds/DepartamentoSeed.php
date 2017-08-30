<?php

use Illuminate\Database\Seeder;

class DepartamentoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(['departamento' => 'Escolaridade']);
    }
}
