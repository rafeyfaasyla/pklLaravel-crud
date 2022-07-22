<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa =[
            ['nis' => '1001', 'nama_siswa' => ' Rafeyfa asyla', 'alamat_siswa'=>'kp.sayuran','tgl_lahir'=>'2006-03-18'],
        ];

        DB::table('siswas')->insert($siswa);
    }
}
