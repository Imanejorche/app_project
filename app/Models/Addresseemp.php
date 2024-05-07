<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresseemp extends Model
{
    use HasFactory;
  

    protected $fillable = [
        'pays',
        'addr1',
        'addr2',
        'codepos',
        'ville',
        'emp_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id');
    }
}


