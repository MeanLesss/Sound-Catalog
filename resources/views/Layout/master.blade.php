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
    <style type="text/css">
        @font-face {
            font-family: 'Kodchasan';
            src: url('{{ public_path('fonts\\Kodchasan-Regular.ttf') }}');
        }

        body {
            font-family: 'Kodchasan';
            margin: 0;
            padding: 0;
            background: linear-gradient(169deg, rgba(60, 185, 252, 1) 0%,
                    rgba(181, 55, 242, 1) 61%, rgba(138, 43, 226, 1) 100%);
        }
        .content{
            width: 100%;
            height:100%;
        }
        .sidebar {
            width: 20%;
            height: 100%;
            border-right: 2px dashed white;
        }

        .btn {
            margin: 5px;
            color: whitesmoke;
            max-width: 200px;
        }
        .sideBtn{
            margin: 5px;
            color: whitesmoke;
            width: 70%;
        }
        .btn:hover {
            color: #120052;
            border: 3px solid #120052;
        }

        .logo {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    {{-- <h1>MeanLess Sound</h1> --}}
    <div style="height: 100vh;width:100vw;">
        <div class="d-flex m-0 p-0" style="width:100%;height:100%">
            {{-- sidebar block --}}
            <div class="d-flex flex-column justify-content-center sidebar">
                @yield('sidebar')
            </div>

            {{-- content block --}}
            <div class="d-flex flex-row justify-content-start align-items-center p-3 m-0 content gap-3">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
