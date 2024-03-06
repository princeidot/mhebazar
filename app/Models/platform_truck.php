<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platform_truck extends Model
{
    protected $table = 'platformtruck';
    protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
        'manufacturer',
        'Model',
        'capacity',
        'operator_type',
        'plateform',
        'operation',
        'wheel_base',
        'batteryWeight',
        'serviceWeight',
        'tyres',
        'tyre_size_front',
        'tyre_size_rear',
        'n_o_w',
        'track_width',
        'overall_length',
        'overall_width',
        'battery_compartment',
        'turning_radius',
        'platform_size',
        'platform_height',
        'towing_height',
        'TravelSpeed',
        'Gradient',
        'service_brake_type',
        'parking_brake_type',
        'drive_motor_rating',
        'drive',
        'BatteryType',
        'BatteryCapacity',
        'charger_capacity',
        'drive_control',

    ];
}
