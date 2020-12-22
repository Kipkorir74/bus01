<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='booking';
    protected $fillable=['booking_id ,customer_name ,phone_no0 ,seat_name ,created_at ,updated_at '];
    protected $primarykey='booking_id';
}
