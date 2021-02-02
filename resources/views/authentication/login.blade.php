@extends('layouts.index')
@section('content')
{{-- @if (session('status'))
            <div class="bg-red-500  p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
                
            @endif --}}
<form action="{{route('loggedIn')}}" method="post" autocomplete="off" >
    @csrf

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
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="enter password">
        @error('password')
        <div class="alert alert-danger">
            {{$message}}
        </div>
    @enderror
    </div>

    <div class="">
        <button type="submit">Login</button>
    </div>
</form>
@endsection