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
         'email' => 'admin@gmail.com',
         'password' => bcrypt('admin'),
         'id_rol' => 3,
       ]);
     DB::table('users')->insert([
        'name' => 'admin2',
        'email' => 'admin2@gmail.com',
        'password' => bcrypt('admin2'),
        'id_rol' => 2,
      ]);
     DB::table('users')->insert([
        'name' => 'Rodolfo Pérez',
        'email' => 'rodolfito@gmail.com',
        'password' => bcrypt('rodolfito'),
      ]);
     DB::table('users')->insert([
        'name' => 'Pablo Sanchez',
        'email' => 'pablosan@gmail.com',
        'password' => bcrypt('pablito'),
      ]);
     DB::table('users')->insert([
        'name' => 'Juana Pérez',
        'email' => 'juanita@gmail.com',
        'password' => bcrypt('juanita'),
      ]);
     DB::table('users')->insert([
        'name' => 'No asociar a ningún usuario',
        'email' => '-',
        'password' => bcrypt('-'),
      ]);
    }
}
