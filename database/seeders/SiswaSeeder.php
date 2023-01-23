<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama'=>'ani',
            'nomor_induk'=>'1000',
            'alamat'=>'ganding',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'budi',
            'nomor_induk'=>'1001',
            'alamat'=>'sumenep',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'candra',
            'nomor_induk'=>'1002',
            'alamat'=>'pamekasan',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
