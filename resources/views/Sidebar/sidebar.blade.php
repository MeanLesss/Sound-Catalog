@extends('Layout.master')
{{-- @section('title', 'Home') --}}
@section('style')
    h1{
    color:green;
    }
@endsection
@section('sidebar')
    <h1>MeanLess Sound</h1>
    <nav class="nav flex-column">
        <a class="nav-item active" href="#">Active</a>
        <a class="nav-item" href="#">Link</a>
        <a class="nav-item" href="#">Link</a>
        <a class="nav-link disabled" href="#">Disabled</a>
    </nav>
@endsection
