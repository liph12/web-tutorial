@extends('main')

@section('title', 'Sign In')

@section('content')
<div class="form-container">
   <div class="form-content">
      <form method="post" action="{{ route('auth-user') }}">
         @csrf
         <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" />
         </div>
         <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" />
         </div>
         <button type="submit" class="btn btn-primary form-control">Submit</button>
         @if(session('error'))
         <span class="mb-3 text-danger">{{ session('error') }}</span>
         @endif
      </form>
   </div>
</div>
@endsection