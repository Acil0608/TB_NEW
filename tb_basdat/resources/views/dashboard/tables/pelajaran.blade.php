@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Pelajaran
    </h1>
    <a id="features"></a>
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Jadwal Id</th>
                            <th>Guru Id</th>
                            <th>Mata Pelajaran</th>
                            <th>Mulai</th>
                            <th>Berakhir</th>
                            <th>Edit | Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->jadwal_id }}</td>
                                <td>{{ $d->guru_id }}</td>
                                <td>{{ $d->nama_mataPelajaran }}</td>
                                <td>{{ $d->mulai_pelajaran }}</td>
                                <td>{{ $d->akhir_pelajaran }}</td>
                                <th>Edit | Delete</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/row-->
    <a id="more"></a>
    <!--/row-->
    <a id="flexbox"></a>
    <!--/main col-->
</div>
@endsection
