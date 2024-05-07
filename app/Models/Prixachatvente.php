<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prixachatvente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nivprix',
        'type',
        'prix',
        'devise',
    ];
}
