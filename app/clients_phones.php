<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clients_phones extends Model
{
    use SoftDeletes;
    
    protected $table = 'clients_phone';

    protected $fillable = ['id_client','id_type', 'number', 'comments',];

    protected $dates = ['deleted_at'];
}
