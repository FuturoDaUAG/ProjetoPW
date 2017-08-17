<?php

use Illuminate\Database\Seeder;

class PredioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('predios')->insert(['descricao' => 'Professores']);
    }
}
