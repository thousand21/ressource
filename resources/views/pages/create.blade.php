@extends('template.index')
@section('content')
<h1 class="text-center">Create photo</h1>

<form action="{{route('photos.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">URL</label>
    <input type="text" class="form-control" name="url">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">Description</label>
    <textarea class="form-control" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection