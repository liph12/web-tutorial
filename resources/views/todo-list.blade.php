@extends('main')

@section('title', 'Todo List')

@section('content')
<div class="container">
    <form method="post" action="{{ route('store-activity') }}" class="my-5">
      @csrf
      <div class="mb-3">
         <label class="form-label">Activity Name</label>
         <input type="text" class="form-control" name="activity_name" />
         @error('activity_name')
         <span>{{ $message }}</span>
         @enderror
      </div>
      <div class="mb-3">
         <label class="form-label">Schedule</label>
         <input type="date" class="form-control" name="schedule" />
         @error('schedule')
         <span>{{ $message }}</span>
         @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
   <table class="table">
    <thead>
      <tr>
        <th scope="col">Activity</th>
        <th scope="col">Schedule</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $todo)
      <tr>
        <td>{{ $todo->activity_name }}</td>
        <td>{{ $todo->schedule }}</td>
        <td>{{ $todo->status }}</td>
        <th scope="col">
          <form action="{{ route('update-activity') }}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $todo->id }}" />
              <input type="hidden" name="status" value="{{ $todo->status }}" />
              <button type="submit" class="btn btn-{{ $todo->status == 'pending' ? 'primary' : 'danger' }} btn-sm">{{ $todo->status == 'pending' ? 'Done' : 'Delete' }}</button>
          </form>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection