<?php

use Illuminate\Database\Seeder;

class SellableTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
            array('name' => 'Promo', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Pizza', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Bebida', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Postre', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')),
            array('name' => 'Descuento', 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'))

        );

        //  PropertyType::insert($data); // Eloquent approach
        DB::table('sellable_types')->insert($data); // Query Builder approach
    }
}
