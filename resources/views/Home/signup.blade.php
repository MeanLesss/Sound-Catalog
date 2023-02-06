@extends('Sidebar.sidebar')
@section('title', 'Sign up')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center content">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $er)
                    {{ $er }}<br />
                @endforeach
            </div>
        @endif
        {{-- {!! Form::open(['route' => 'login.auth', 'method' => 'POST', 'style' => 'max-width:50%;width:30%;']) !!} --}}
        <form action="{{url('login.auth')}}" method="POST" style = "max-width:50%;width:30%;">
            @csrf
            <h1 class="mb-5">Sign up</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="confirmPassword" id="floatingPassword"
                    placeholder="Confirm password">
                <label for="floatingPassword">Confirm password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>

        {{-- </main> --}}
    </div>
@endsection
