<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;
    protected $fillable = ['activity_name', 'schedule', 'status',];

    public function store($request)
    {
        $newActivity = [
            'activity_name' => $request->activity_name,
            'schedule' => $request->schedule,
            'status' => 'pending'
        ];

        $this->create($newActivity);
    }

    public function updateStatus($request)
    {
        $done = $request->status == 'pending';

        if($done){
            $this->where('id', $request->id)->update(['status' => 'done']);
        }else{
            $this->where('id', $request->id)->delete();
        }
    }
}
