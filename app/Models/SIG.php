<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SIG extends Model
{
    use HasFactory;
    protected $table = 'sig';

    protected $fillable = [
        'categoria',
        'titulo',
        'enlace',
        'archivo',
        'imagen',
        'recurso',
        'gif',
    ];
}
