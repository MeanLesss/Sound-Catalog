@extends('Sidebar.sidebar')
@section('title', 'Home')
@section('content')
<div class="d-flex flex-row justify-content-start align-items-center content" style="width: 100%;height: 100%;">
    <div class="d-flex flex-column justify-content-start gap-2">
        <h1>
            Welcome to MeanLess Sound
        </h1>
        <h6>
            Here where you can find and use the sound effect for your project peacefully !!
        </h6>
        <a class="btn btn-primary md-2" href="/sound">Let get started! 🚀</a>
    </div>
    <iframe src='https://my.spline.design/miniroomcopy-77dadaa0340eb544536408f876f8f149/' frameborder='0' width='100%'
    height='100%'></iframe>
</div>
    @endsection
