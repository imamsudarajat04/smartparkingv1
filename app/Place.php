<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    protected $fillable = ['placeName'];

    public function Parking()
    {
        return $this->belongsTo('App\Parking');
    }

}
