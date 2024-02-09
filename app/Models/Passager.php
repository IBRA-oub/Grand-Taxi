<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Passager extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
       'name',
       'email',
       'password',
       'picture_passager',
       'phone'
    ];
    
}