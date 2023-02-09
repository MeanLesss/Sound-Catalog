@extends('Sidebar.sidebar')
@section('title', 'Add sound')
@section('content')
    @if (auth()->check())
        {{auth()->user()->id}}

        <div class="d-flex justify-content-center align-items-center " style="height: 100%;">
            {!! Form::open(['route' => 'sound.add', 'method' => 'POST', 'style' => 'max-width:50%;width:30%;']) !!}
            <h1>Add Sound 🎵</h1>

            <div class="form-floating mb-3">
                <input type="file" accept=".mp3, .wav" class="form-control" name="uploadSound" id="floatingInput"
                    placeholder="Upload Sound">
                <label for="floatingInput">Upload sound</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" accept="image/png, image/jpeg" class="form-control" name="uploadImage"
                    id="floatingInput" placeholder="Upload Cover">
                <label for="floatingInput">Upload Cover</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="floatingInput" placeholder="Title">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="textarea" class="form-control" name="description" id="floatingInput" placeholder="Description">
                <label for="floatingInput">Description</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Upload</button>
            {!! Form::close() !!}
        </div>
    @else
    <div class="d-flex justify-content-center align-items-center content" >
        <a href="/login" class="btn btn-danger">Go to login</a>
    </div>
    @endif
@endsection
