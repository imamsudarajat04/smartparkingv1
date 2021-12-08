<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'user_id', 'place_id', 'vehicle_id', 'quantity', 'status'
    ];

    public function place()
    {
        return $this->belongsTo('App\Place');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
}
