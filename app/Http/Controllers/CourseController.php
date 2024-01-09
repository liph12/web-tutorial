<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Room;
use App\Models\Subject;

class CourseController extends Controller
{
    public function deptView(Department $dept)
    {
        $departments = $dept->getDepartments();

        return view('course.department', compact('departments'));
    }

    public function courseView(Room $room, $dept_id)
    {
        $department = Department::find($dept_id)->dept_name;
        $rooms = $room->findRoom($dept_id);

        return view('course.rooms', compact('rooms', 'department'));
    }

    public function subjView(Subject $subject)
    {
        $subjects = $subject->getCourseDetails();

        return view('course.subjects', compact('subjects'));
    }
}
