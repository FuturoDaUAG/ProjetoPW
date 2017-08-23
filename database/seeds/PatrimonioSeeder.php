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
        
    $descricao = array("Monitor","Mouse","Desktop","Teclado","Impressora","Estabilizador","DataShow");
        for ($i = 1; $i <= 10; $i++){
        DB::table('patrimonios')->insert(['descricao' => $descricao[rand(0,6)],
                                            'valor' => rand(10,5000),
                                            'numeropatrimonio' => '2017'.$i,
                                            'numeropantigo' => '2017'.$i."42",
                                            'numeroempenho'=>$i."42",
                                            'numeropregao' => '4242',
                                            'numeronotafiscal' => "3333.".$i,
                                            'marca_id'=> rand(1,7)]);
    }
     }
}
