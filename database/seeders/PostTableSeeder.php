<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use DB;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel =[
            ['title' => 'Assalaam Juara', 'content' => 'Assalaam studio'] ,
            ['title' => 'Assalaam Berkurban', 'content' => 'Assalaam studio'] ,
            ['title' => 'Assalaam Bersholawat', 'content' => 'Assalaam studio'] 
        ];

        DB::table('posts')->insert($sampel);
       
    }
}
