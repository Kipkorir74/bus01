<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table='operators';
    protected $fillable=['operator_id,operator_name,operator_email,operator_phone,operator_address,status,created_at,updated_at'];

    public function buses()
    {
        return $this->hasMany('App\Buses');
    }
}
