<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            [
                'hari' => 'senin',
                'kelas_id' => 1,
            ],
            [
                'hari' => 'selasa',
                'kelas_id' => 2,
            ],
            [
                'hari' => 'rabu',
                'kelas_id' => 1,
            ],
            [
                'hari' => 'kamis',
                'kelas_id' => 2,
            ],
            [
                'hari' => 'jumat',
                'kelas_id' => 1,
            ],
            [
                'hari' => 'sabtu',
                'kelas_id' => 2,
            ],
        ]);
    }
}
