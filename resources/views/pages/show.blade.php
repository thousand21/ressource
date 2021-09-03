@extends('template.index')
 
@section('content')
<div class="container d-flex justify-content-center m-5">

    <h2>Show Photos</h2>
    <button class="bg-success" ><a href="{{route("photos.create")}}"> Create</a></button>
    
  </div>
<div class="container w-25">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"></h5>
            <p class="card-text">{{$photo->nom}}</p>
            <p class="card-text">{{$photo->url}}</p>
            <p class="card-text">{{$photo->description}}</p>
        <a class="btn btn-warning" href="{{route('photos.edit', $photo->id)}}">Edit Photo</a>
        <form action="{{route('photos.destroy', $photo->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>
</div>
@endsection