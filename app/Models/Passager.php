<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'email',
       'password',
       'picture_passager',
        'phone'
    ];
    
}