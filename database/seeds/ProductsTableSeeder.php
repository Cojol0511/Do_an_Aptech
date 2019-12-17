<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            # code...
            Product::insert([
                'name' => $faker-> name(),
                'size' => $faker-> numberBetween($min = 28, $max = 36),
                'price' => $faker-> randomNumber(),
                'brand' => $faker->numberBetween($min = 0, $max = 10),
                'detail' => $faker->text(20),
            ]);
        }
    }
}
