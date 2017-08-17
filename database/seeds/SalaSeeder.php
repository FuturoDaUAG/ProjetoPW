<?php

use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salas')->insert(['descricao' => 'Superior',
            'ramal' => '789', 'predio_id' => 1]);
    }
}
