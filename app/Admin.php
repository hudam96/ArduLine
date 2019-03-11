<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    protected $fillable =['username','password','name'];
    public function setPasswordAttribute($newPassword){
        $this->attributes["password"] = Hash::make($newPassword);
    }
}
