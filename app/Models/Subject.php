<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Subject extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_code', 'room_code')->with(['instructor', 'department']);
    }

    public function getCourseDetails()
    {
        return $this->with('room')->get();
    }
}
