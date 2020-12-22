<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_Schedule extends Model
{
    protected $table='bus_schedules';
    protected $fillable=['schedule_id,operator_id,bus_id,region_id,sub_region_id,depart_date,return_date,depart_time,return_time,status,created_at,updated_at'];
    protected $primarykey='schedule_id';
}
