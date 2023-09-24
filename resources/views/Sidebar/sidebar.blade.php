@extends('Layout.master')
{{-- @section('title', 'Home') --}}
@php
    $value = Session::get('logout');
@endphp
@section('sidebar')
    <h3 class="logo">MeanLess Sound</h3>
    @if ($value == 1)
        <nav class="nav flex-column justify-content-start align-items-center" style="height: auto;">
            <a class="nav-item sideBtn btn {{ Request::segment(1) === 'login' ? 'active' : '' }}" href="/login">Log in</a>
            <a class="nav-item sideBtn btn btn-danger {{ Request::segment(1) === 'signup' ? 'active' : '' }}" href="/signup">Sign up</a>
        </nav>
    @endif
    @if (auth()->check())
        <h1 class="logo">{{ auth()->user()->name }}</h1>
    @endif
    <nav class="nav flex-column justify-content-center align-items-center" style="height: 60%;">
        <a class="nav-item sideBtn btn {{ Request::segment(1) === 'home' ? 'active' : '' }}" href="/home">Home</a>
        <a class="nav-item sideBtn btn {{ Request::segment(1) === 'sound' ? 'active' : '' }}" href="/sound">Sound</a>
        <a class="nav-item sideBtn btn {{ Request::segment(1) === 'sound' ? 'active' : '' }}" href="/admin">admin</a>
        {{-- {{ Session::get('logout') }} --}}

        @if ($value != 1)
            <a class="nav-item sideBtn btn btn-danger d-hidden" href="/logout">Log out</a>
        @endif
    </nav>
@endsection
