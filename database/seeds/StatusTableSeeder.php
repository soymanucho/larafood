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
         'color' => '#CA422F',
         'is_final' => false,
       ]);
      DB::table('status')->insert([
         'name' => 'en preparación',
         'color' => '#E39800',
         'is_final' => false,
       ]);
      DB::table('status')->insert([
         'name' => 'preparado',
         'color' => '#346AB9',
         'is_final' => false,
       ]);
      DB::table('status')->insert([
         'name' => 'en camino',
         'color' => '#56BCF2',
         'is_final' => false,
       ]);
      DB::table('status')->insert([
         'name' => 'entregado',
         'color' => '#3AA346',
         'is_final' => true,
       ]);
      DB::table('status')->insert([
         'name' => 'cancelado',
         'color' => '#0D0D0D',
         'is_final' => true,
       ]);
    }
}
