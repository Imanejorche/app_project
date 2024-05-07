<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addressefor extends Model
{
    use HasFactory;

    protected $fillable = [
        'pays',
        'addr1',
        'addr2',
        'codepos',
        'ville',
        'for_id',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
