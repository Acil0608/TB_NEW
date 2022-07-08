<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\miniKHS\Guru;
use App\Models\miniKHS\Pelajar;
use App\Models\miniKHS\Jurusan;
use App\Models\miniKHS\Jadwal;
use App\Models\miniKHS\Pelajaran;
use App\Models\miniKHS\Kelas;
use App\Models\miniKHS\Status;
use App\Models\User;

class miniKHSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::get();
        $pelajar = Pelajar::get();
        $jurusan = Jurusan::get();
        $jadwal = Jadwal::get();
        $pelajaran = Pelajaran::get();
        $kelas = Kelas::get();
        $status = Status::get();

        return view('dashboard.index', compact([
            'guru',
            'pelajar',
            'jurusan',
            'jadwal',
            'pelajaran',
            'kelas',
            'status',
        ]));
    }

    public function tables_pelajar()
    {
        $data = Pelajar::get();
        return view('dashboard.tables.pelajar', compact([
            'data'
        ]));
    }

    public function tables_jurusan()
    {
        $data = Jurusan::get();
        return view('dashboard.tables.jurusan', compact([
            'data'
        ]));
    }

    public function tables_jadwal()
    {
        $data = Jadwal::get();
        return view('dashboard.tables.jadwal', compact([
            'data'
        ]));
    }

    public function tables_pelajaran()
    {
        $data = Pelajaran::get();
        return view('dashboard.tables.pelajaran', compact([
            'data'
        ]));
    }

    public function tables_kelas()
    {
        $data = Kelas::get();
        return view('dashboard.tables.kelas', compact([
            'data'
        ]));
    }
}
