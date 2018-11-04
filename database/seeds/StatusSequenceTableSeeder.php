<?php

use Illuminate\Database\Seeder;

class StatusSequenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('status_sequence')->insert([
         'id_current_status' => '1',
         'id_next_status' => '2',
       ]);
      DB::table('status_sequence')->insert([
         'id_current_status' => '2',
         'id_next_status' => '3',
       ]);
      DB::table('status_sequence')->insert([
         'id_current_status' => '3',
         'id_next_status' => '4',
       ]);
      DB::table('status_sequence')->insert([
         'id_current_status' => '4',
         'id_next_status' => '5',
       ]);
      DB::table('status_sequence')->insert([
         'id_current_status' => '1',
         'id_next_status' => '6',
       ]);
      DB::table('status_sequence')->insert([
         'id_current_status' => '2',
         'id_next_status' => '6',
       ]);
      DB::table('status_sequence')->insert([
         'id_current_status' => '3',
         'id_next_status' => '6',
       ]);

    }
}
