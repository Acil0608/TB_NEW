<?php

namespace App\Http\Controllers\crudTables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\miniKHS\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::get();
        return view('dashboard.guru.index', compact([
            'data'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Guru::create($request->all());
        return redirect()->route('dashboard.guru.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Guru::find($id);
        return view('dashboard.guru.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru'=>'required',
            'jurusan_id'=>'required'
        ]);

        $data = Guru::find($id);
        $data->nama_guru = $request->get('nama_guru');
        $data->jurusan_id = $request->get('jurusan_id');
        $data->save();
        return redirect()->route('dashboard.guru.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('dashboard.guru.index')->with('success', 'Data Guru berhasil dihapus');
    }
}
