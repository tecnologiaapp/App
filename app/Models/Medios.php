<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medios extends Model
{
    use HasFactory;
    protected $table = 'medios';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
