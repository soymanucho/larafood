<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('status')->insert([
         'name' => 'recibido',
       ]);
      DB::table('status')->insert([
         'name' => 'en preparación',
       ]);
      DB::table('status')->insert([
         'name' => 'preparado',
       ]);
      DB::table('status')->insert([
         'name' => 'en camino',
       ]);
      DB::table('status')->insert([
         'name' => 'entregado',
       ]);
    }
}
