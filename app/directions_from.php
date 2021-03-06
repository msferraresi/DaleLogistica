<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class directions_from extends Model
{
    use SoftDeletes;
    
    protected $table = 'directions_tos';

    protected $fillable = ['id_client','calle', 'numero', 'piso', 'depto', 'area', 'sector', 'comentarios', 'latitud', 'longitud'];

    protected $dates = ['deleted_at'];

    public function clients(){
        return $this->hasMany(clients::class, 'id');
    }
}
