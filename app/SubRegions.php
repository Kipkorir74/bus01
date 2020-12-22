<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubRegions extends Model
{
    protected $table='sub_region';
    protected $fillable=['sub_region_id ,sub_region_code ,sub_region_name,	status ,created_at ,updated_at  '];
    protected $primarykey='sub_region_id';
}
