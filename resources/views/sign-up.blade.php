@extends('main')

@section('title', 'Sign Up')

@section('content')
<div class="container">
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
         <label class="form-label">Gender</label>
         <input type="text" class="form-control" name="gender" />
         @error('gender')
         <span>{{ $message }}</span>
         @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
@endsection