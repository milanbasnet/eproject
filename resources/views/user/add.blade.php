@extends('layouts.index')

@section('content')
<form method="post" action="{{route('add')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="name">Product Name</label>
      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter product name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="description">
    </div>
    <div class="image">
        <label for="image">Select image:</label>
        <input type="file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection