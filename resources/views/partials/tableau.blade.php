@extends('template.index')
@section('content')


<div class="container d-flex justify-content-center mt-5">

  <h2>Photos</h2>
  <button class="bg-success" ><a href="{{route("photos.create")}}"> Create</a></button>
  
</div>
  

<table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Url</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($photo as $photos)
    <tr>
      <th scope="row">{{$photos->id}}</th>
      <td>{{$photos->url}}</td>
      <td>{{$photos->nom}}</td>
      <td>{{$photos->description}}</td>
      <td>
        <div class="d-flex">
            <form action="{{route('photos.destroy', $photos->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class=" btn rounded m-3 bg-danger" type="submit">Delete</button>
            </form>

            <button class="btn rounded m-3 bg-warning"><a class="text-decoration-none" href="{{route('photos.show', $photos->id)}}">Show</a></button>

            <button class=" btn rounded m-3 bg-success"><a class="text-decoration-none" href="{{route('photos.edit',$photos->id)}}">Edit</a></button>
        </div>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection