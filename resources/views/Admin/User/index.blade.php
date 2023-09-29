@extends('Sidebar.sidebar')
@section('title', 'User')
@section('content')
<h1>User</h1>
<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/signup" class="btn btn-info">Create User</a>
</div>

<div class="d-flex flex-row flex-wrap gap-3" style="overflow: auto">

    @foreach ($users as $item)
        <!-- Card -->
        <div class="card" style="width: 350px;height: 150px;">

            <div class="card-body text-center">
                <h5 class="h5 font-weight-bold"><a href="#" target="_blank">{{ $item->id .' | '.$item->name }}</a></h5>
                {{-- <p class="mb-0">{{ $item->email }}</p> --}}

                Email : {{$item->email}}
                <br/>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="badge rounded-pill {{$item->statusBan == 1 ? 'text-bg-danger' : 'text-bg-success'}}">
                            {{$item->statusBan == 0 ? 'Active' : 'Ban'}}
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li> <a href="/admin/ban/{{$item->id}}" class="dropdown-item">{{$item->statusBan == 1 ? 'Active' : 'Ban'}}</a></li>
                      <li><a class="dropdown-item" href="/user/edit/{{$item->id}}">Edit</a></li>
                      <li><a class="dropdown-item text-danger" href="/user/delete/{{$item->id}}">Delete</a></li>
                    </ul>
                  </div>
            </div>
        </div>
        <!-- Card -->
    @endforeach
</div>

@endsection
