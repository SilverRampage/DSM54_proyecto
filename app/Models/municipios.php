<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model {

    use HasFactory;

    /* protected $table = 'estados';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre']; */

    protected $fillable = [
        'municipios',
        'id',
        'nombre',
        'clave',
        'estado_id',
    ];

}
