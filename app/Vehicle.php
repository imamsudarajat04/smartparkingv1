<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'user_id',
        'category_vehicles_id',
        'platNumber',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function categoryvehicle()
    {
        return $this->belongsTo('App\CategoryVehicle');
    }
}
