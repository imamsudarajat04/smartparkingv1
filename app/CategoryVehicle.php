<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryVehicle extends Model
{
    protected $table = 'category_vehicles';

    protected $fillable = ['transportaionType'];
    
}
