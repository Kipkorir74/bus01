<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table='region';
    protected $fillable=['region_id ,region_code ,region_name ,status ,created_at ,updated_at '];
    protected $primarykey='region_id';
}
