@extends('Sidebar.sidebar')
@section('title', 'Sound')
@section('content')

    <h1>Find the sound suit your project.</h1>
    <div class="d-flex justify-content-center align-items-start">
        {{-- input type="text" class="form-control" placeholder="Search" aria-label="Large" aria-describedby="inputGroup-sizing-sm"> --}}
        <div class="input-group mb-3">
            <div class="input-group-prepend dropdown">
                {{-- <button class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">Dropdown</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div> --}}
            </div>
            <input type="text" class="rounded form-control" placeholder="Search your sound"
                aria-label="Text input with dropdown button">
            <a class="btn btn-outline-secondary" href="#">Search</a>
        </div>
    </div>
    {{-- Cards container  --}}
    <div class="d-flex flex-row flex-wrap gap-3" style="overflow: auto">

        <!-- Card -->
        <div class="card" style="width: 350px;height: 500px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body text-center">

                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                <p class="mb-0">Urban Bachata remix</p>

                <audio id="music" preload="true" controls>
                    <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg">
                </audio>
                {{-- <div id="audioplayer">
                    <i id="pButton" class="fas fa-play"></i>
                    <div id="timeline">
                        <div id="playhead"></div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card" style="width: 350px;height: 500px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body text-center">

                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                <p class="mb-0">Urban Bachata remix</p>

                <audio id="music" preload="true" controls>
                    <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg">
                </audio>
                {{-- <div id="audioplayer">
                    <i id="pButton" class="fas fa-play"></i>
                    <div id="timeline">
                        <div id="playhead"></div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card" style="width: 350px;height: 500px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body text-center">

                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                <p class="mb-0">Urban Bachata remix</p>

                <audio id="music" preload="true" controls>
                    <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg">
                </audio>
                {{-- <div id="audioplayer">
                    <i id="pButton" class="fas fa-play"></i>
                    <div id="timeline">
                        <div id="playhead"></div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card" style="width: 350px;height: 500px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body text-center">

                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                <p class="mb-0">Urban Bachata remix</p>

                <audio id="music" preload="true" controls>
                    <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg">
                </audio>
                {{-- <div id="audioplayer">
                    <i id="pButton" class="fas fa-play"></i>
                    <div id="timeline">
                        <div id="playhead"></div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card" style="width: 350px;height: 500px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body text-center">

                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                <p class="mb-0">Urban Bachata remix</p>

                <audio id="music" preload="true" controls>
                    <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg">
                </audio>
                {{-- <div id="audioplayer">
                    <i id="pButton" class="fas fa-play"></i>
                    <div id="timeline">
                        <div id="playhead"></div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Card -->
        <!-- Card -->
        <div class="card" style="width: 350px;height: 500px;">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2019/02/flam.jpg"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            <div class="card-body text-center">

                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">Dj Flam</a></h5>
                <p class="mb-0">Urban Bachata remix</p>

                <audio id="music" preload="true" controls>
                    <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg">
                </audio>
                {{-- <div id="audioplayer">
                    <i id="pButton" class="fas fa-play"></i>
                    <div id="timeline">
                        <div id="playhead"></div>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Card -->
    </div>
    {{-- <audio id="indie" src="{{ asset('sounds\\Winning Sound.mp3') }}" preload="auto" controls></audio> --}}

@endsection
