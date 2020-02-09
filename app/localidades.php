<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class localidades extends Model
{
    use SoftDeletes;
    
    protected $table = 'trips';

    protected $fillable = ['id_zona','name','kilometers'];

    protected $dates = ['deleted_at'];
}
