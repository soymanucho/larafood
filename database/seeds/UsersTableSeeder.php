<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
         'name' => 'admin',
         'email' => 'admin@admin.com',
         'password' => bcrypt('admin'),
         'id_rol' => 3,
         'id_store' => 1,
         'api_token' => str_random(50),
       ]);
     DB::table('users')->insert([
        'name' => 'admin2',
        'email' => 'admin2@admin.com',
        'password' => bcrypt('admin2'),
        'id_rol' => 2,
        'id_store' => 2,
        'api_token' => str_random(50),
      ]);
     DB::table('users')->insert([
        'name' => 'Rodolfo Pérez',
        'email' => 'rodolfito@gmail.com',
        'password' => bcrypt('rodolfito'),
        'api_token' => str_random(50),
      ]);
     DB::table('users')->insert([
        'name' => 'Pablo Sanchez',
        'email' => 'pablosan@gmail.com',
        'password' => bcrypt('pablito'),
        'api_token' => str_random(50),
      ]);
     DB::table('users')->insert([
        'name' => 'Juana Pérez',
        'email' => 'juanita@gmail.com',
        'password' => bcrypt('juanita'),
        'api_token' => str_random(50),
      ]);

    }
}
