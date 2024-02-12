<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;


    protected $fillable = [
        'depart',
        'arrive'
       
    ];

    public function reservation(){
        return $this->belongsTo(reservation::class);
    }
    
}