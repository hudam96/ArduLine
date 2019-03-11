<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable =['id','name'];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
