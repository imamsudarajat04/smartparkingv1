<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['user_id', 'booking_id', 'payment_method', 'transferPhoto', 'payment_date', 'status'];

    public function place()
    {
        return $this->belongsTo('App\Place');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
}
