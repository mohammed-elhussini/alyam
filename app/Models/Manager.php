<?php

namespace App\Models;
//use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


//class Manager extends Model
class Manager extends Authenticatable
{
    use HasFactory;

    protected $guard = "dashboard";

    protected $hidden = [
        'password',
        'remember_token',
    ];

    //protected $guarded=[];
    //protected $fillable = ['username','first-name','last-name','phone','email','password','image'];


}


