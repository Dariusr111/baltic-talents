<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function lecture(){
        return $this->hasMany(Lecture::class);
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function lector(){
        return $this->belongsTo(User::class, 'lector_id');
    }


    public function users()
    {
        return $this-belongsToMany(User::class);
    }

    public function students(){
        return $this->hasMany(Group_user::class);
    }








}
