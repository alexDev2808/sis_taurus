<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ensamble extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'desc',
        'url',
    ];
}
