<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_user extends Model
{
    use HasFactory;
    protected $table='group_user';
    public function students(){
        return $this->hasMany(User::class);
    }

    public function group(){
        return $this->belongsToMany(Group::class,'group_user');
    }
}
