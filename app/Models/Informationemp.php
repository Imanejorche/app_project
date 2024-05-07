<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informationemp extends Model
{
    use HasFactory;

    protected $fillable = [
        'foremp',
        'titre',
        'emp_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_id');
    }
}
