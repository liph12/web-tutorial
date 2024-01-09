@extends('main')

@section('title', 'Department')

@section('content')
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Department</th>
        <th scope="col">College</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($departments as $dept)
            <tr>
                <td>{{ $dept->dept_name }}</td>
                <td>{{ $dept->college }}</td>
                <td><a href="{{ route('courses', ['dept_id' => $dept->id]) }}" class="btn btn-primary btn-sm">View</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <a href="#" class="btn btn-primary btn-sm">View Subjects</a>
</div>
@endsection