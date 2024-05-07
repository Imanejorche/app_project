<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informationfor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nivprix',
        'devise',
        'remise',
        'taxe',
        'langues',
        'for_id',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
