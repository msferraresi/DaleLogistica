<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class trip extends Model
{
    use SoftDeletes;
    
    protected $table = 'trips';

    protected $fillable = ['id_from','id_to'];

    protected $dates = ['deleted_at'];

}
