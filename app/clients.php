<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clients extends Model
{
    use SoftDeletes;

    protected $table = 'clients';

    protected $fillable = ['id_user', 'razon_social', 'cuit_cuil', 'id_condicion_iva', 'special_discount', 'calle_facturacion', 'numero_facturacion', 'piso_facturacion', 'depto_facturacion', 'area_facturacion', 'nombre_contacto_facturacion', 'latitud', 'longitud'];

    protected $dates = ['deleted_at'];

    public function phones()
    {
        return $this->hasMany(clients_phones::class, 'id_client', 'id');
    }

    public function mails()
    {
        return $this->hasMany(clients_mails::class, 'id_client', 'id');
    }

    public function directionsFrom()
    {
        return $this->hasMany(directions_from::class, 'id_client', 'id');
    }

    public function directionsTo()
    {
        return $this->hasMany(directions_to::class, 'id_client', 'id');
    }

    public function invoices()
    {
        return $this->hasMany(invoice_header::class, 'id_client', 'id');
    }

    public function condicionIVA()
    {
        return $this->hasOne(condicion_iva::class, 'id', 'id_condicion_iva');
    }
}
