<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clients_phones extends Model
{
    use SoftDeletes;

    protected $table = 'clients_phone';

    protected $fillable = ['id_client', 'id_type', 'number', 'comments',];

    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->hasOne(clients::class, 'id', 'id_client');
    }

    public function type()
    {
        return $this->hasOne(type_phone::class, 'id', 'id_type');
    }
}
