<?php

use Illuminate\Database\Seeder;

class ServidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servidors')->insert(['usuario_id' => 1,'nome' => 'Maria', 'cargo' => 'Assistente',
                                        'matricula' => '123']);
    }
}
