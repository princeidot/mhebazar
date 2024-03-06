<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scissorslift extends Model
{
    use HasFactory;
     protected $table = 'scissorslift';
    protected $fillable = [
        'title',
        'img1',
        'img2',
        'sdescription',
        'ldescription',
        'manufacturer',
        'model',
        'capacity',
        'operator_type',
        'platform_length',
        'platform_width',
        'platform_height',
        
        'lift_height',
        'total_lift_height',
        'overall_length',
        'overall_width',

        'hydraulic_cylinder_no',
        'floor_lock_no',
        'floor_lock_type', 
        'no_of_wheel',
        'wheel_type',
        'wheel_dimensions',
        'platform_extension',

        'platform_extention_type',
        'capacity_on_extented_platform',
        'wheel_base',
        'ground_clearance',
        'self_weight',
        'turning_radoius',
        'travel_speed',
        'lifting_speed',
        'power_source',

       
    ];
}
