<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'numerofor',
        'email',
        'telephone',
    ];

    public function informationFor()
    {
        return $this->hasOne(InformationFor::class);
    }

    public function adresseFor()
    {
        return $this->hasOne(AdresseFor::class);
    }
}


