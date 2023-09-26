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
            <a class="btn btn-danger btn-outline-secondary" href="/sound/add">Add Sound ➕</a>
            <form action="/sound/search" method="POST" class="w-100 row">
                @csrf
                {!! Form::select('category', $category, null, ['class' => 'form-select col-lg-3']) !!}

                <input type="text" class="rounded form-control col-6" placeholder="Search your sound"
                aria-label="Text input with dropdown button" name="inputSearch">
                <button class="btn btn-outline-secondary col-2" type="submit">Search 🔍</button>
            </form>
        </div>
    </div>
    {{-- Cards container  --}}
    <div class="d-flex flex-row flex-wrap gap-3" style="overflow: auto">

        @foreach ($sounds as $item)
            <!-- Card -->
            <div class="card" style="width: 350px;height: 500px;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img class="card-img-top" src="{{ asset($item->imagePath) }}" alt="Card image cap"
                        style="width:340px ;height:200px">
                </div>
                <div class="card-body text-center">
                    <h5 class="h5 font-weight-bold"><a href="#" target="_blank">{{ $item->title }}</a></h5>
                    <p class="mb-0">{{ $item->description }}</p>

                    <audio id="music" preload="true" controls download>
                        {{-- <source src="{{ asset('sounds\\Winning Sound.mp3') }}" type="audio/mpeg"> --}}
                        <source src="{{ asset($item->soundPath) }}" type="audio/mpeg">
                        <source src="{{ asset($item->soundPath) }}" type="audio/wav">
                    </audio>
                    Uploaded by : {{$item->name}}
                    <br/>
                    Category : {{$item->category}}
                </div>
            </div>
            <!-- Card -->
        @endforeach
    </div>
    {{-- <audio id="indie" src="{{ asset('sounds\\Winning Sound.mp3') }}" preload="auto" controls></audio> --}}

@endsection
