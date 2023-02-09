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
            box-sizing: unset;
            font-family: 'Kodchasan';
            margin: 0;
            padding: 0;
            background: linear-gradient(169deg, rgba(60, 185, 252, 1) 0%,
                    rgba(181, 55, 242, 1) 61%, rgba(138, 43, 226, 1) 100%);
        }

        .content {
            width: 100%;
            height: 100%;
        }

        .sidebar {
            width: 20%;
            height: 100%;
            border-right: 2px dashed white;
        }

        .btn {
            /* margin: 5px; */
            color: whitesmoke;
            /* max-width: 200px; */
        }

        .sideBtn {
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

        .card {
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        .card .view {
            -webkit-border-top-left-radius: 10px;
            border-top-left-radius: 10px;
            -webkit-border-top-right-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card h5 a {
            color: #0d47a1;
        }

        .card h5 a:hover {
            color: #072f6b;
        }

        #pButton {
            float: left;
        }

        #timeline {
            width: 90%;
            height: 2px;
            margin-top: 20px;
            margin-left: 10px;
            float: left;
            -webkit-border-radius: 15px;
            border-radius: 15px;
            background: rgba(0, 0, 0, 0.3);
        }

        #pButton {
            margin-top: 12px;
            cursor: pointer;
        }

        #playhead {
            width: 8px;
            height: 8px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            margin-top: -3px;
            background: black;
            cursor: pointer;
        }
    </style>
</head>

<body>
    {{-- <h1>MeanLess Sound</h1> --}}
    {{-- <div style="height: 100vh;width:100vw;"> --}}
    <div class="d-flex" style="width:100vw;height:100vh">
        {{-- sidebar block --}}
        <div class="d-flex flex-column justify-content-center sidebar">
            @yield('sidebar')
        </div>

        {{-- content block style="width: 100%;height: 100%;"--}}
        <div class="d-flex flex-column justify-content-start px-5 m-0" style="width: 100%;">
            {{-- <div class="d-flex flex-column justify-content-start align-items-center p-3 m-0 container"> --}}
            @yield('content')
        </div>
    </div>
    {{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4b848ea5a.js" crossorigin="anonymous"></script>
</body>

</html>
