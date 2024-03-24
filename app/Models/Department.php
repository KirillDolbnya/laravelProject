<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function designer()
    {
        return $this->hasOneThrough(Worker::class, Position::class, 'department_id','position_id','id','id')->where('position_id', 2);
    }

    public function workers()
    {
        return $this->hasManyThrough(Worker::class,Position::class,'department_id','position_id','id','id');
    }
}
