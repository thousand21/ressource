@extends('template.index')
@section('content')

<div class="container w-50">
    <h1 class="text-center">Edit Photo</h1>

<form action="{{route('photos.update', $photo->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">URL</label>
    <input type="text" value="{{$photo->url}}" class="form-control" name="url">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" value="{{$photo->nom}}"class="form-control" name="nom">
  </div>
  <div class="mb-3 form-check">
    
    <label class="form-check-label" for="exampleCheck1">Description</label>
    <input class="form-control" value="{{$photo->description}}"name="description">
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</div>

@endsection