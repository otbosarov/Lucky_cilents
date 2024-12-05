<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cilent extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'workplace',
        'client_salary',
        'age',
        'gender',
        'active',
    ];
}
