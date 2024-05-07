<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'numeroclient',
        'email',
        'telephone',
        'statut',
        'ntaxe',
    ];

    protected $attributes = [
        'statut' => 'client',
    ];

    protected $nullable = [
        'ntaxe',
    ];
}

