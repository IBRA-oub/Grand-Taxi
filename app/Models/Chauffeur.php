<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'picture_chauffeur',
       'description',
        'matricule',
        'status',
        'typeVoiture',
        'typePayement'
    ];
}