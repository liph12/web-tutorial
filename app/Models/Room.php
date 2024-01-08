<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Room extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->hasMany(Subject::class, 'room_code', 'room_code');
    }

    public function scopeFindRoom($query, $deptId)
    {
        return $query->where('dept_id', $deptId)->with('subject')->get();
    }
}
