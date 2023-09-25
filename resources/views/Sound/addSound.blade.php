@extends('Sidebar.sidebar')
@section('title', 'Add sound')
@section('content')
    @if (auth()->check())
        {{-- {{ auth()->user()->id }} --}}

        <div class="d-flex justify-content-center align-items-center " style="height: 100%;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $er)
                        {{ $er }}<br />
                    @endforeach
                </div>
            @endif
            {{-- {!! Form::model([
                'route' => ['sound.add'],
                'method'=> 'POST',
                'class' => 'form',
                'files' => 'true',
                'style' => 'max-width:50%;width:30%;',
            ]) !!} --}}
            <form action="{{url('sound/add')}}" method="POST" enctype="multipart/form-data" file="true">
                @csrf
            <h1>Add Sound 🎵</h1>

            <div class="form-floating mb-3">
                <input type="file" accept=".mp3, .wav" class="form-control" id="soundPath" name="soundPath" id="floatingInput"
                    placeholder="Upload Sound">
                <label for="floatingInput">Upload sound</label>
            {{-- {!!Form::file('soundPath')!!} --}}

            </div>
            <div class="form-floating mb-3">
                <input type="file" accept="image/png, image/jpeg" class="form-control" name="imagePath"
                    id="floatingInput" placeholder="Upload Cover">
                <label for="floatingInput">Upload Cover</label>
            {{-- {!!Form::file('imagePath')!!} --}}
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="floatingInput" placeholder="Title">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="textarea" class="form-control" name="description" id="floatingInput" placeholder="Description">
                <label for="floatingInput">Description</label>
            </div>
            <label for="floatingInput">Category</label>
            {!! Form::select('category', $categories, null, ['class' => 'form-select col-lg-3']) !!}

            <button class="w-100 btn btn-lg btn-danger" type="submit">Upload</button>
            {!! Form::close() !!}
        </div>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center content">
            <h1>Plase log in before upload your sound!</h1>
            <a href="/login" class="btn btn-danger">Go to login</a>
        </div>
    @endif
@endsection
