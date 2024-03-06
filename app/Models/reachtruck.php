<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reachtruck extends Model
{
    protected $table = 'reachtruck';
    protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
         'manufacturer',
        'model',
        'capacity',
        'operator_type',
        'load_center_for_rated_capacity',
        'power_mode',
        'driving_mode',
        'front_overhang',
        'wheelbase',
        'service_weight',
        'axle_load_laden_front',
        'axle_load_unladen-front',
        'tyre_type',
        'tyre_size_front',
        'tyre_size_rear',
        'wheel_number',
        'tread_front',
        'tread_rear',
        'fork_tilt_angle',
        'height',
        'free_lifting_height',
        'lifting_height',
        'max_height_extended',
        'height_of_overhead_guard',
        'seat_height_relating_to_sip',
        'overall_length_with_fork',
        'overall_length_without_fork',
        'overall_width',
        'fork_dimension',
        'fork_carriage',
        'distance_across_fork_arm',
        'fork_sideshifting',
        'distance_between_support_arm',
        'reach_distance',
        'ground_clearance',
        'right_angle_stacking_aisle_width_for_pallet_1000x1200mm',
        'right_angle_stacking_aisle_width_for_pallet_800x1200mm',
        'min_outside_turning_radius',
        'travel_speed',
        'lift_speed',
        'lowering_speed',
        'reach_speed',
        'max_gradeability',
        'battery_type',
        'battery_capacity',
        'battery_weight',
        'battery_box_dimension',
        'drive_motor_rating',
        'lifting_motor_rating',
        'steering_motor_rating',
        'drive_motor_control_mode',
        'lifting_motor_control_mode',
        'steering_motor_control_mode',
        'transmission_box',
        'service_break_type',
        'parking_break_type',


    ];
}
