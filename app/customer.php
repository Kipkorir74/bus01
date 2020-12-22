<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

class customer extends Model
{
    protected $table='customers';
    protected $fillable=['customer_id,customer_name,customer_phone,seat_no,user_id,created_at,updated_at'];
    protected $primarykey='bus_id';
    }

