<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class condicion_iva extends Model
{
    use SoftDeletes;

    protected $table = 'condicion_ivas';

    protected $fillable = ['description',];

    protected $dates = ['deleted_at'];

    public function clients()
    {
        return $this->hasMany(clients::class, 'id_condicion_iva', 'id');
    }
}
