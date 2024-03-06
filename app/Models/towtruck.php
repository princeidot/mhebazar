<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class towtruck extends Model
{
    protected $table = 'towtruck';
     protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
        'manufacturer',
        'Model',
        'capacity',
        'operator_type',
        'rated_towing_ability',
        'max_towing_capacity',
        'turning_radius',
        'travelspeed',
        'overall_length',
        'overall_width',
        'overall_height',
        'drive_motor_rating',
        'gradient',
        'battery_type',
        'battery_capacity',
        'controler',
        'battery_weight',
        'service_weight',
     ];
}
