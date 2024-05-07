<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iformationcl extends Model
{
    use HasFactory;

    protected $table = 'information_cl';

    protected $fillable = [
        'lieustock',
        'nivprix',
        'devise',
        'remise',
        'montantcom',
        'typetaxe',
        'jours',
        'delais',
        'langues',
    ];

    protected $nullable = [
        'remise',
        'montantcom',
       
    ];
}

