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
        {{--  --}}
        {!! Form::open(['route' => ($user == null || $user->id <= 0 ? 'signup.store' : 'signup.update'), 'method' => 'POST',  'style' => 'max-width:50%;width:30%;']) !!}

        {{-- <form action="{{url('login.store')}}" method="POST" style = "max-width:50%;width:30%;">
            @csrf --}}
            <h1 class="mb-5"> {{$user == null || $user->id <= 0 ? 'Create' : 'Update'}} account</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="id" value="{{$user == null || $user->id <= 0 ? '' : $user->id}}" id="floatingInput" hidden>
                <input type="text" class="form-control" name="name" value="{{$user == null || $user->id <= 0 ? '' : $user->name}}" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{$user == null || $user->id <= 0 ? '' : $user->email}}"  id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            @if($user == null || $user->id <= 0)
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="confirmPassword" id="floatingPassword"
                        placeholder="Confirm password">
                    <label for="floatingPassword">Confirm password</label>
                </div>
            @endif
            <button class="w-100 btn btn-lg btn-primary" type="submit">Save</button>
        {{-- </form> --}}
        {!! Form::close() !!}
        </main>
    </div>
@endsection
