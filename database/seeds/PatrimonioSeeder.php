<?php

use Illuminate\Database\Seeder;

class PatrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patrimonios')->insert(['descricao' => 'Monitor', 'valor' => '100', 'numeropatrimonio' => '12345',
            'numeropantigo' => '54321', 'numeroempenho'=>'09876', 'numeropregao' => '56789', 'numeronotafiscal' => '12356124',
            'marca_id'=> '2']);
    }
}
