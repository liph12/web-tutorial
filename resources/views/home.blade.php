@extends('main')

@section('title', 'Home')

@section('content')
<div class="container">
   @if($user)
   <p>Name: {{ $user->name }}</p>
   <p>Email: {{ $user->email }}</p>
   <p>Gender: {{ $user->gender }}</p>
   <button type="button" class="btn btn-primary btn-md">View Profile</button>
   @else
   <p>User not found.</p>
   @endif
</div>
@endsection