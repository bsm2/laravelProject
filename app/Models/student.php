<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class student extends Authenticatable
{
    // use HasFactory, Notifiable;
    // protected $guard='student';
    
    protected $table ='students';
    protected $fillable = [
        'name',
        'email',
        'password'
        
    ];
    protected  $hidden   = ['created_at','updated_at'];
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
}
