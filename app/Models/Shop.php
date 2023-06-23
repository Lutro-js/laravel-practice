<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Category');//所属する
    }
    use HasFactory;
}
