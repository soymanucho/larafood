<?php

use Illuminate\Database\Seeder;

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
            array('name' => 'Roquefort', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Tomates', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Ajo', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Muzarela', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Provolone', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Anchoas', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Morrones', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Cantimpalo', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Champignon', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Palmito', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Aceitunas Verdes', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Aceitunas Negras', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),


        );

        //  PropertyType::insert($data); // Eloquent approach
        DB::table('ingredients')->insert($data); // Query Builder approach
    }
}
