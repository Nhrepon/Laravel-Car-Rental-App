<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CARENTAL') }}</title>


    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toastify.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />

    @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
</head>

<body class="font-sans antialiased mx-auto vh-100">
    <main>
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
<!-- Sidebar area                     -->                    
                    <div class="col--3 sidebar">
                        <div class="bg-success p-2 vh-100">
                        <h3 class="p-2 text-3xl text-light d-flex justify-content-center gap-2"><i class="bi bi-speedometer"></i><span class="d-sm-inline-block d-none">Dashboard</span></h3>
                        <i class="toggle bg-success text-light bi bi-chevron-left d-none d-sm-flex"></i>
                            <hr />
                            <ul class="list-unstyled d-flex flex-column gap-2" style="max-height: 70vh">
                                <li class="nav-item d-flex bg-light rounded px-2 py-1 d-flex justify-content-center justify-content-sm-start">
                                    <a href="{{route('dashboard')}}" class="nav-link gap-2 d-flex"><i class="bi bi-house"></i><span class="d-sm-inline-block d-none">Home</span></a>
                                </li>
                                <li class="nav-item d-flex bg-light rounded px-2 py-1 d-flex justify-content-center justify-content-sm-start"><a
                                        href="{{route('car')}}" class="nav-link">Car</a>
                                </li>
                                <li class="nav-item d-flex bg-light rounded px-2 py-1 d-flex justify-content-center justify-content-sm-start"><a
                                        href="{{route('car')}}" class="nav-link">Car</a>
                                </li>


                            </ul>
                        </div>
                    </div>
<!-- Main content area                     -->
                    <div class="col--9 content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- Scripts -->
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/toastify-js.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>