<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dsiswa = [
            ['NoSISWA' => '2001', 'Nama' => 'Badu', 'JK' => 'L', 'Jurusan' => 'TK'],
            ['NoSISWA' => '2002', 'Nama' => 'Muliati', 'JK' => 'P', 'Jurusan' => 'TE'],
            ['NoSISWA' => '2003', 'Nama' => 'Rahmadi', 'JK' => 'L', 'Jurusan' => 'TK'],
            ['NoSISWA' => '2004', 'Nama' => 'Nasrol', 'JK' => 'L', 'Jurusan' => 'TK'],
        
        ];
        // masukab ke databse
DB::table('siswa')->insert($dsiswa);

    }
}
