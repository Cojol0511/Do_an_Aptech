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
                'product_name' => $faker-> name(),
                'brand_id' => 1,
                'comment_id' => 1,
            ]);
        }
    }
}
