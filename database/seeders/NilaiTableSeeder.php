<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NilaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nilai = [
            ['nis'=>1001,'nama_siswa'=>'Rafeyfa','nilai'=> 80,'indeks_nilai'=>'B']
        ];

        DB::table('_nilai_')->insert($nilai);
    }
}
