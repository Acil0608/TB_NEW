<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($pelajaran = 1; $pelajaran <= 21; $pelajaran++) {
            DB::table('gurus')->insert([
                [
                    'nama_guru' => 'guru listrik ' . $pelajaran,
                    'jurusan_id' => 1,
                    'pelajaran_id' => $pelajaran,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama_guru' =>  'guru akuntansi ' . 21 + $pelajaran,
                    'jurusan_id' => 21 + $pelajaran,
                    'pelajaran_id' => $pelajaran,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
            ]);
        }
    }
}
