<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ept extends Model
{
    protected $table = 'ept';
    protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
        'manufacturer', 
        'model', 
        'capacity',
        'operator_type',
        'width_over_forks',
        'load_center_for_rated_capacity',
        'travel_speed',
        'lift_speed',
        'lowering_speed',
        'gradient',
        'battery_type',
        'battery_weight',
        'battery_capacity',
        'service_weight',
        'wheelbase',
        'overall_width',
        'overall_length',
        'lift_height',
        'fork_lowering_height',
        'fork_dimensions',
        'ground_clearance',
        'turning_radius',
        'type_of_drive_motor',
        'tyres',
        'tyre_size_drive',
        'tyre_size_load',
        'support_rollers',
        'number_of_wheels',
        'lift_motor_rating',
        'drive_motor_rating',
        'drive_control',  

    ];
}
