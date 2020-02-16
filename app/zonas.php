<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class zonas extends Model
{
    use SoftDeletes;

    protected $table = 'zonas';

    protected $fillable = ['description'];

    protected $dates = ['deleted_at'];

    public function localidades()
    {
        return $this->hasMany(localidades::class, 'id_zona', 'id');
    }
}
