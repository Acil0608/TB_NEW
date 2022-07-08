@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Overview
    </h1>
    <hr>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-primary">
                <div class="card-block bg-primary p-2">
                    <h6 class="text-uppercase">Guru</h6>
                    <h1 class="display-1">{{ $guru->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-secondary">
                <div class="card-block bg-secondary p-2">
                    <h6 class="text-uppercase">Pelajar</h6>
                    <h1 class="display-1">{{ $pelajar->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
                <div class="card-block bg-success p-2">
                    <h6 class="text-uppercase">Jurusan</h6>
                    <h1 class="display-1">{{ $jurusan->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
                <div class="card-block bg-danger p-2">
                    <h6 class="text-uppercase">Jadwal</h6>
                    <h1 class="display-1">{{ $jadwal->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
                <div class="card-block bg-warning p-2">
                    <h6 class="text-uppercase">Pelajaran</h6>
                    <h1 class="display-1">{{ $pelajaran->count() }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
                <div class="card-block bg-info p-2">
                    <h6 class="text-uppercase">Kelas</h6>
                    <h1 class="display-1">{{ $kelas->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-dark">
                <div class="card-block bg-dark p-2">
                    <h6 class="text-uppercase">Status</h6>
                    <h1 class="display-1">{{ $status->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
