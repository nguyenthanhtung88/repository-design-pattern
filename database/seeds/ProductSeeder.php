<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
        	Product::create([
        		'name' => $faker->name,
        		'description' => $faker->text
        	]);
        }
    }
}
