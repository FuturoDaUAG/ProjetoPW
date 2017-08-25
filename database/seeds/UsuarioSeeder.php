<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usuarios')->insert(['name' => 'Zé', 'email' => 'jose@teste.com',
                                            'password' => bcrypt('[jose2017]'), 'departamento_id' => '1']);

    }
}
