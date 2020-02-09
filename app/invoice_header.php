<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoice_header extends Model
{
    use SoftDeletes;
    
    protected $table = 'invoice_headers';

    protected $fillable = ['id_client','id_user'];

    protected $dates = ['deleted_at'];
}
