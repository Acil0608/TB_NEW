<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Carbon\Carbon;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwal = 1;
        $counter = 0;
        for($pelajaran = 1; $pelajaran <= 21; $pelajaran++){
            $counter++;
            DB::table('pelajarans')->insert([
                [
                    'nama_mataPelajaran' => 'Pelajaran listrik ' . $pelajaran,
                    'mulai_pelajaran' => Carbon::create('2022', '01', '01'),
                    'akhir_pelajaran' => Carbon::create('2022', '01', '01'),
                    'jadwal_id' => $jadwal,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'nama_mataPelajaran' => 'Pelajaran akuntansi ' . $pelajaran,
                    'mulai_pelajaran' => Carbon::create('2022', '01', '01'),
                    'akhir_pelajaran' => Carbon::create('2022', '01', '01'),
                    'jadwal_id' => $jadwal,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ],
            ]);
            if($counter%3 == 0){
                $jadwal++;
            }
        }
    }
}
