@extends('Layout.master')
{{-- @section('title', 'Home') --}}
@section('sidebar')
    <h3 class="logo">MeanLess Sound</h3>
    <nav class="nav flex-column justify-content-center align-items-center" style="height: 80%;">
        <a class="nav-item sideBtn btn {{ Request::segment(1)==='home' ? 'active' : '' }}" href="/home">Home</a>
        <a class="nav-item sideBtn btn {{ Request::segment(1)==='sound' ? 'active' : '' }}" href="/sound">Sound</a>
        <a class="nav-item sideBtn btn btn-danger visble-hidden" href="#">Log out</a>
    </nav>
@endsection
