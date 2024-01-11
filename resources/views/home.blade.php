@extends('main')

@section('title', 'Home')

@section('content')
<div class="container">
   @if(Auth::check())

   @php
   $user = Auth::user();
   @endphp

   <p>Name: {{ $user->name }}</p>
   <p>Email: {{ $user->email }}</p>
   <a href="{{ route('sign-out') }}" class="btn btn-primary btn-md">Sign Out</a>
   @else
   <p>User not found.</p>
   @endif
</div>
@endsection