<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $table = 'parkings';

    protected $fillable = ['place_id', 'category_vehicle_id', 'parkingStock', 'parkingPrice'];

    public function category_vehicles()
    {
        return $this->belongsTo('App\CategoryVehicle', 'category_vehicle_id');
    }
}
