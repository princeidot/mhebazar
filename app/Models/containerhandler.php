<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class containerhandler extends Model
{
    protected $table = 'containerhandler';
    protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
        'manufacturer',
        'model',
        'capacity',
        'operator_type',
        'load_center_for_rated_capacity',
        'max_handling_layers',
        'length_of_container_lifted',
        'max_rotary_lock_height',
        'min_rotary_lock_height',
        'lifting_speed',
        'lowering_speed',
        'mast_tilt',
        'traveling_speed',
        'min_turning_radius',
        'max_gradeability',
        'overall_length',
        'overall_width',
        'overall_height',
        'wheel_base',
        'tread',
        'min_under_clearance',
        'lateral_displacement_of_spreader',
        'engine_manufacturer',
        'engine_model',
        'wheel_number',
        'engine_rated_power_rated_speed',
        'max_torque_rated_speed',
        'fuel_consumption',
        'gearbox',
        'tyre_type',
        'tyre_size_front',
        'tyre_size_rear',

    ];
}
