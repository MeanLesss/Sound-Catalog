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
            <a class="btn btn-danger btn-outline-secondary" href="/sound/add">Upload Sound ➕</a>
            <form action="/admin/sound/search" method="POST" class="w-100 row" id="searchForm">
                @csrf
                {!! Form::select('category', $category, null, ['class' => 'form-select col-lg-3','id'=>'sorter']) !!}

                <input type="text" class="rounded form-control col-6" placeholder="Search your sound"
                aria-label="Text input with dropdown button" id="inputSearch" name="inputSearch">
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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="badge rounded-pill {{$item->statusApprove == 0 ? 'text-bg-warning' : 'text-bg-success'}}">
                                {{$item->statusApprove == 0 ? 'Pending' : 'Approved'}}
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li> <a href="/admin/{{$item->id}}" class="dropdown-item">{{$item->statusApprove == -1 ? 'Pending' : 'Approve'}}</a></li>
                          <li><a class="dropdown-item" href="/sound/edit/{{$item->id}}">Edit</a></li>
                          <li><a class="dropdown-item text-danger" href="/sound/delete/{{$item->id}}">Delete</a></li>
                        </ul>
                      </div>
                </div>
            </div>
            <!-- Card -->
        @endforeach
    </div>
    {{-- <audio id="indie" src="{{ asset('sounds\\Winning Sound.mp3') }}" preload="auto" controls></audio> --}}
<script>
    document.getElementById('sorter').addEventListener('change', function() {
        document.getElementById('inputSearch').value = this.value;
        document.getElementById('searchForm').submit();
    });
</script>
@endsection
