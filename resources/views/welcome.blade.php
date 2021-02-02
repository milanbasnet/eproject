@extends('layouts.index')
@section('content')

<form method="get" action="">
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
                <img src="{{asset('images')}}/{{$imageName}}" alt="">
            </div>
          </div>
          @endforeach
    </div>
    </div>
            </form>
@endsection