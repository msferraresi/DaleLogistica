<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clients extends Model
{
    use SoftDeletes;
    
    protected $table = 'clients';

    protected $fillable = ['id_user','razon_social', 'cuit_cuil', 'id_condicion_iva', 'special_discount', 'calle_facturacion', 'numero_facturacion', 'piso_facturacion', 'depto_facturacion', 'area_facturacion', 'nombre_contacto_facturacion', 'latitud', 'longitud'];

    protected $dates = ['deleted_at'];
}
