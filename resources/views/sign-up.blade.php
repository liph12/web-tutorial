@extends('main')

@section('title', 'Sign Up')

@section('content')
<div class="form-container">
   <div class="form-content">
      <form method="post" action="{{ route('store-user') }}">
         @csrf
         <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" />
            @error('email')
            <span>{{ $message }}</span>
            @enderror
         </div>
         <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" />
            @error('name')
            <span>{{ $message }}</span>
            @enderror
         </div>
         <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
            @error('password')
            <span>{{ $message }}</span>
            @enderror
         </div>
         @if(session('success'))
            <span class="text-success mb-3">{{ session('success') }}</span>
         @endif
         <button type="submit" class="btn btn-primary form-control">Submit</button>
      </form>
   </div>
</div>
@endsection