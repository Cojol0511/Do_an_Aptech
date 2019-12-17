<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Brand::insert([
            ['name' => 'Supreme'],
            ['name' => 'Chmapion'],
            ['name' => 'Carhart'],
        ]);
    }
}
