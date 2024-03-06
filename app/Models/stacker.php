<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stacker extends Model
{
    protected $table = 'stacker';
    protected $fillable = [
        'title',
        'description',
        'Manufacturer',
        'Model',
        'Capacity',  
        'Operator_Type',
        'Width_Over_Forks',
        'mast_type',
        'load_center_for_rated_capacity',
        'wheel_base',
        'wheel_type',
        'number_of_wheels',
        'lift_height',
        'max_extended_height',
        'lowered_height',
        'lowered_fork_height',
        'fork_dimensions',
        'overall_length',
        'overall_width',
        'turning_radius',
        'MinAisleWidth',
        'MinGroundClearance',
        'TravelSpeed',
        'LiftSpeed',
        'LoweringSpeed',
        'Gradient',
        'DriveMotor',
        'LiftMotor',
        'SteeringMotor',
        'BatteryType',
        'BatteryCapacity',
        'Controler',
        'BatteryWeight',
        'ServiceWeight',
        
    ];
}
