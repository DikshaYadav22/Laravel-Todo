@extends ('layouts.master')

@section('content')
<h3 class="text-center mt-2">Create Todos</h3>
<div class="card mt-5">

<div class="card-header ">
<h6>Create new todo</h6>
</div>

<div class="card-body">
     @if($errors ->any())
        <div class="alert alert-danger">
            <ul class="list-group">
               @foreach($errors->all() as $error)
                  <li class="list-group-item">
                        {{$error}}
                  </li>
                @endforeach
              </ul>
            </div>
          @endif

<form action="/store-todos" method="post">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Description</label>
     <textarea class="form-control" name="description" rows="5" cols="5"></textarea>
    </div>

    <div class="form-group text-center">
    <button type="submit" class="btn btn-success" name="button">Create Todo </button>
    </div>
  
  </form>
  </div>
@endsection