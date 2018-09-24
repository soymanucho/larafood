<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(IngredientSeeder::class);
         $this->call(ProductTypeSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(ProvincesTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(StoreTableSeeder::class);
    }
}
