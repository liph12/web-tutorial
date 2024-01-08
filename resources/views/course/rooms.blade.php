@extends('main')

@section('title', 'Courses')

@section('content')
<div class="container">
    <h3>{{ $department }}</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Room</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td>
                    <p>{{ $room->room_code }}</p>
                    <div class="mx-2">
                        <h6>Subjects:</h6>
                        @foreach ($room->subject as $subj)
                        <p>{{ $subj->subj_code }} {{ $subj->subj_description }} {{ $subj->subj_schedule }}</p>
                        @endforeach
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection