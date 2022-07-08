@extends('dashboard')

@section('content')
    <div class="col-md-9 col-lg-10 main bg-light">
        <h1 class="display-2 hidden-xs-down">
            Guru
        </h1>

        <a href="{{ route('dashboard.guru.index') }}" class="btn btn-primary btn-lg mb-2" role="button"
            aria-pressed="true">Kembali</a>
        <form action="{{ route('dashboard.guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Guru</label>
                <input name="nama_guru" type="text" class="form-control" placeholder="Masukan Nama Guru">
                <label>Pengajar Jurusan</label>
                <select class="form-control" name="jurusan_id">
                    <option value=""></option>
                    <option value="1">Listrik</option>
                    <option value="2">Akuntansi</option>
                    <option value="3">Teknik Keamanan Jaringan</option>
                </select>
                <label>Mata Pelajaran</label>
                <select class="form-control" name="pelajaran_id">
                    <option value=""></option>
                    <option value="1">contoh 1</option>
                    <option value="2">contoh 2</option>
                    <option value="3">contoh 3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
