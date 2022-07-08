<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = 1;
        $counter = 0;
        for($i = 1; $i <= 21; $i++){
            $counter++;
            DB::table('pelajars')->insert([
                [
                    'nama_pelajar' => 'pelajar listrik ' . $i,
                    'jurusan_id' => 1,
                    'status_id' => 0,
                    'kelas_id' => $kelas,
                ],
                [
                    'nama_pelajar' => 'pelajar listrik ' . 21+$i,
                    'jurusan_id' => 2,
                    'status_id' => 0,
                    'kelas_id' => $kelas,
                ]
            ]);
            if($counter%3 == 0){
                $kelas++;
            }
        }
    }
}
