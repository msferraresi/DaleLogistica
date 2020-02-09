<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class configuration extends Model
{
    use SoftDeletes;
    
    protected $table = 'configurations';

    protected $fillable = ['description','value',];

    protected $dates = ['deleted_at'];
}
