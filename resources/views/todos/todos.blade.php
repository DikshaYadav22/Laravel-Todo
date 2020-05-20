@extends('layouts.master')



@section('content')

<div class="card mt-5">
<div class="card-header">
<h4 class="text-center text-uppercase ">Todo Application </h4>
</div>

<div class="card-body text-capitalize">
<ul class="list-group">
@foreach($todos as $todo)

<li class="list-group-item">

{{$todo->name}}
<a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
</li>
@endforeach
</ul>
@endsection
