@extends('layouts.index')
@section('content')
<form action="{{route('register')}}" method="post" autocomplete="off" >
    @csrf

    <div class="mb-4">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" autocomplete="off" placeholder="your name" 
        @error('name') border:red @enderror>

        @error('name')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror

    </div>
    <div class="mb-4">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter email address">
        @error('email')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>
    <div class="mb-4">
        <label for="number">Number</label>
        <input type="integer" name="number" id="number" autocomplete="off" placeholder="enter your phone number">
    </div>
    @error('number')
    <div class="alert alert-danger">
        {{$message}}
    </div>
@enderror
    <div class="mb-4">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="enter password">
        @error('password')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>

    <div class="">
        <button type="submit">Register</button>
    </div>
</form>
@endsection