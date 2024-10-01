<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbdesenho extends Model
{
    use HasFactory;

    protected $primaryKey = 'idDesenho';
    protected $fillable = [
        'nomeDesenho',
        'dataDesenho',
        'generoDesenho',
        'autorDesenho',
    ];
}
