<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seats extends Model
{
    protected $table='seats';
    protected $fillable=['id ,name,created_at ,updated_at '];
    protected $primarykey='id';
}
