@extends('layouts.index')
@section('content')
<form method="get" action="" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <?php
                $imageName=json_decode($post->imageFile);
            ?>
          <div class="col-sm-4">
            <div class="title">
                <h3>{{$post->product}}</h3>
            </div>
            <div class="description">
                <p>{{($post->description)}}</p>
            </div>
            <div class="image">
                <img src="{{asset('images')}}/{{($imageName)}}" alt="">
            </div>
            <div>
                <form method="get" action="{{route('posts',['id'=> $post->id])}}">
                    @csrf
                    {{-- @method('DELETE') --}}
                    <button type="submit" class="text-blue-500">Delete</button>
                </form>
                <form method="get" action="{{route('edit',['id'=> $post->id])}}">
                    @csrf
                    <button type="submit" class="text-blue-500">Edit</button>
                </form>
            </div>
          </div>
          @endforeach
    </div>
    </div>
            </form>
@endsection