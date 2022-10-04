<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function tax(){
        return $this->belongsTo(Tax::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function picture(){
        return $this->belongsTo(Picture::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
