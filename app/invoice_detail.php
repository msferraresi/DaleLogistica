<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoice_detail extends Model
{
    use SoftDeletes;
    
    protected $table = 'invoice_details';

    protected $fillable = ['id_header','id_from', 'id_to', 'value_kilometer', 'cost_trip'];

    protected $dates = ['deleted_at'];
}