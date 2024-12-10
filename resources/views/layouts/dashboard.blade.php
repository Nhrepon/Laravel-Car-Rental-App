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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased mx-auto vh-100">
    <main>
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">

                        <div class="bg-success p-2 vh-100">
                            <h3 class="text-center p-2 text-3xl">Dashboard</h3>
                            <hr />
                            <ul class=" list-unstyled" style="max-height: 70vh">
                                <li class="nav-item">
                                    <a href="{{route('dashboard')}}" class="nav-link" style="display: inline-block; width:100%;">Home</a>
                                </li>
                                <li class="nav-item"><a
                                        href="{{route('car')}}" class="nav-link" style="display: inline-block; width:100%;">Car</a>
                                </li>
                                <li class="nav-item"><a
                                        href="{{route('car')}}" class="nav-link" style="display: inline-block; width:100%;">Car</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-9">
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