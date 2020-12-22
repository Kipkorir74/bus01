<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $table='buses';
    protected $fillable=['bus_id,bus_name,operator_id,status,created_at,updated_at'];
    protected $primarykey='bus_id';

    public function operators()
    {
        return $this->belongsTo('App\Operator');
    }

}
