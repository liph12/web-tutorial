
@extends('main')

@section('title', 'Subjects')

@section('content')
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Offering</th>
        <th scope="col">Code</th>
        <th scope="col">Description</th>
        <th scope="col">Units</th>
        <th scope="col">Schedule</th>
        <th scope="col">Room</th>
        <th scope="col">Instructor</th>
        <th scope="col">Department</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subj)
            <tr>
                <td>{{ $subj->offering_no }}</td>
                <td>{{ $subj->subj_code }}</td>
                <td>{{ $subj->subj_description }}</td>
                <td>{{ $subj->subj_units }}</td>
                <td>{{ $subj->subj_schedule }}</td>
                <td>{{ $subj->room->room_code }}</td>
                <td>{{ $subj->room->instructor->inst_name }}</td>
                <td>{{ $subj->room->department->dept_name }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection