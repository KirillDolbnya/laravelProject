<?php

namespace App\Models;

use App\Events\CreatedWorkerEvent;
use App\Events\DeleteWorkerEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'workers';

    protected $guarded = false;

    protected static function booted()
    {
        static::created(function ($worker){
            event(new CreatedWorkerEvent($worker));
        });

        static::updated(function ($worker){
            if ($worker->wasChanged() && $worker->getOriginal() != $worker->getAttributes){

                dd(111);

            }
        });

//        static::deleted(function ($worker){
//            event(new DeleteWorkerEvent($worker));
//        });
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function avatar()
    {
        return $this->morphOne(Avatar::class,'avatarable');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class,'reviewable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
}
