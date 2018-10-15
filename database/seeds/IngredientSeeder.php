<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
            array('name' => 'Roquefort','image'=> 'Roquefort.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Tomates','image'=> 'Tomato.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Ajo','image'=> 'Garlic.png','created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Muzarela','image'=> 'Muzarela.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Provolone','image'=> 'Provolone.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Anchoas','image'=> 'Fish.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Morrones','image'=> 'Pepper.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Cantimpalo','image'=> 'Salame.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Champignon','image'=> 'Mushroom.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Palmito','image'=> 'Palmito.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Aceitunas Verdes','image'=> 'GreenOlive.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Aceitunas Negras','image'=> 'BlackOlive.png', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),


        );

        //  PropertyType::insert($data); // Eloquent approach
        DB::table('ingredients')->insert($data); // Query Builder approach
    }
}
