<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoice_header extends Model
{
    use SoftDeletes;

    protected $table = 'invoice_headers';

    protected $fillable = ['id_client', 'id_user'];

    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->hasOne(clients::class, 'id', 'id_client');
    }

    public function user()
    {
        return $this->hasOne(user::class, 'id', 'id_user');
    }

    public function details()
    {
        return $this->hasMany(invoice_detail::class, 'id_header', 'id');
    }
}
