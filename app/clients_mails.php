<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clients_mails extends Model
{
    use SoftDeletes;

    protected $table = 'clients_mails';

    protected $fillable = ['id_client', 'mail', 'comments',];

    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->hasOne(clients::class, 'id', 'id_client');
    }
}
