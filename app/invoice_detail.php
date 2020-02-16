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

    public function header(){
        return $this->hasOne(invoice_header::class, 'id', 'id_header');
    }

    public function from(){
        return $this->hasOne(directions_from::class, 'id', 'id_from');
    }

    public function to(){
        return $this->hasOne(directions_to::class, 'id', 'id_to');
    }

}