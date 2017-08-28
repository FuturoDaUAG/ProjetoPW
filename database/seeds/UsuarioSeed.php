<?php
use Illuminate\Database\Seeder;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(['name' => 'SuperAdministrador', 'email' => 'admin@admin.com',
                                            'password' => bcrypt('[admin]'), 'departamento_id' => '1', 'tipousuario_id' => '1']);

    }
}
