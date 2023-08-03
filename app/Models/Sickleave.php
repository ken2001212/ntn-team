<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sickleave extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'time',
        'select',
        'leave',
    
    ];

}