@extends ('layouts.master')

@section('content')
   <div class="card bg-info mt-5">

   <div class="card-header bg-warning">
<h2 class="text-center text-uppercase text-white ">Todos-Blog</h2>
</div>

<div class="card-body">
    <ul class="list-group">
     <li class="list-group-item text-uppercase">
    {{$todo->name}} 
    </li>
    </ul>

<div class="text-justify bg-white p-4">{{$todo->description}}
</div>
</div>

<a href="/todos/{{ $todo->id }}/edit" class="btn btn-warning font-weight-bold text-white text-md">Edit</a>
<a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger font-weight-bold text-white text-md">Delete</a>
   </div>
@endsection
