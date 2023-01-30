<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ public_path('css\\master.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- @stack('master.css') --}}
    <title>MeanLess Sound-@yield('title', 'page title')</title>
    <style>
        /* @yield('style') */
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    {{-- <h1>MeanLess Sound</h1> --}}
    <div style="height: 100vh;width:100vw;">
        <div class="d-flex" style="width:100%;height:100%">
            {{-- sidebar block --}}
            <div class="flex-column" style="width:30%;height:100%;">
                @yield('sidebar')
            </div>

            {{-- content block --}}
            <div class="d-flex justify-content-center align-items-center p-0"
            style="width: 100%;height:100%;">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
