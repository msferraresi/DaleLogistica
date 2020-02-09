<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class directions_to extends Model
{
    use SoftDeletes;
    
    protected $table = 'directions_tos';

    protected $fillable = ['id_client','calle', 'numero', 'piso', 'depto', 'area', 'sector', 'comentarios', 'latitud', 'longitud'];

    protected $dates = ['deleted_at'];
}
   