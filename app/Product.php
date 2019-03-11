<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App\money_format;
use App\Section ;
class Product extends Model
{
    protected $fillable = ['id', 'name', 'price', 'image', 'discount', 'section_id'];

    public function section(){
        return $this->belongsTo(Section::class );
    }


}
