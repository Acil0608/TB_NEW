@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Guru
    </h1>

    <a href="{{ route('dashboard.guru.create') }}" class="btn btn-primary btn-lg mb-2" role="button" aria-pressed="true">Tambah Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <h4 class="alert-heading">Berhasil!</h4>
            <hr>
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="row mb-3">
        <div class="col-lg-9 col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Id</th>
                            <th>Pengajar Jurusan</th>
                            <th>Nama Guru</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>
                                    @if ($d->jurusan_id == 1)
                                        {{ 'Listrik' }}
                                    @elseif ($d->jurusan_id == 2)
                                        {{ 'Akuntansi' }}
                                    @elseif ($d->jurusan_id == 3)
                                        {{ 'Teknik Keamanan Jaringan' }}
                                    @endif
                                </td>
                                <td>{{ $d->nama_guru }}</td>
                                <td>
                                    <form action="{{ route('dashboard.guru.destroy',$d->id) }}" method="post">
                                    <a class="btn btn-sm btn-warning" href="{{ route('dashboard.guru.edit', $d->id)}}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
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
