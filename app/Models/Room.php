<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Instructor;
use App\Models\Department;

class Room extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->hasMany(Subject::class, 'room_code', 'room_code');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'inst_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }

    public function scopeFindRoom($query, $deptId)
    {
        return $query->where('dept_id', $deptId)->with(['subject', 'instructor'])->get();
    }
}
