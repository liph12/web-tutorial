<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{
    use HasFactory;
    protected $table = 'test_users';
    protected $fillable = [
        'name',
        'email',
        'gender',
        'is_active',
    ];

    public function store($request)
    {
        $newUser = [
            'name' => $request->name, 
            'email' => $request->email, 
            'gender' => $request->gender
        ];

        $this->create($newUser);
    }
}
