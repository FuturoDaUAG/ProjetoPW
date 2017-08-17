<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert(['descricao' => 'Dell']);
        DB::table('marcas')->insert(['descricao' => 'AOC']);
        DB::table('marcas')->insert(['descricao' => 'Samsung']);
        DB::table('marcas')->insert(['descricao' => 'HP']);
        //
    }
}
