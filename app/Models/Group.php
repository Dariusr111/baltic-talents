<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function lecture(){
        return $this->hasMany(Lecture::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this-belongsToMany(User::class);
    }
}
