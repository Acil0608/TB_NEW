<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- custom css --}}
        <link rel="stylesheet" href="{{ URL::asset('css/dashboard/style.css') }}">

        <title>{{ config('app.name') }}</title>
    </head>

    <body>
        @include('partials.navbar')
        <div class="container-fluid" id="main">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-dark" id="sidebar" role="navigation">
                    <ul class="nav flex-column pl-1">
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.index') }}">Overview</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.guru.index') }}">Guru</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.tables.pelajar') }}">Pelajar</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.tables.jurusan') }}">Jurusan</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.tables.jadwal') }}">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.tables.pelajaran') }}">Pelajaran</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('dashboard.tables.kelas') }}">Kelas</a></li>
                    </ul>
                </div>
                <!--/col-->
                @yield('content')
            </div>
        </div>
    </body>

    {{-- jquery --}}
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{ URL::asset('js/dashboard/script.js') }}"></script>
</html>
