<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class jurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jurusan = [
            ['kode_mapel'=>'0110','nama_mapel'=>'logika informatika','semester'=> "4",'jurusan'=>'IT'],
        ];

        DB::table('jurusans')->insert($jurusan);
    }
    
}
