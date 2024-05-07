<?php

namespace App\Models;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresse extends Model
{
    use HasFactory;

    protected $table = 'addresse_cl';

    protected $fillable = [
        'libaddr',
        'typeaddr',
        'telephone',
        'pays',
        'addr1',
        'addr2',
        'codepos',
        'ville',
    ];

    protected $nullable = [
        'telephone',
        'addr2',
        'codepos',
    ];
   
}
