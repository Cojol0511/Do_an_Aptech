<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
            Comment::insert([
                'comment_name' => $faker-> firstName()
            ]);
        }
    }
}
