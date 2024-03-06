<?php

namespace App\Imports;

use App\Models\forklift;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Importforklift implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new forklift([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'load_center_for_rated_capacity' => $row['load_center_for_rated_capacity'],
            'power_mode' => $row['power_mode'],
            'driving_mode' => $row['driving_mode'],
            'front_overhang' => $row['front_overhang'],
            'wheelbase' => $row['wheelbase'],
            'service_weight' => $row['service_weight'],
            'axle_load_laden_front' => $row['axle_load_laden_front'],
            'axle_load_unladen-front' => $row['axle_load_unladen_front'],
            'tyre_type' => $row['tyre_type'],
            'tyre_size_front' => $row['tyre_size_front'],
            'tyre_size_rear' => $row['tyre_size_rear'],
            'wheel_number' => $row['wheel_number'],
            'tread_front' => $row['tread_front'],
            'tread_rear' => $row['tread_rear'],
            'mast_tilt_angle' => $row['mast_tilt_angle'], 'height' => $row['height'],
            'free_lifting_height' => $row['free_lifting_height'],
            'lifting_height' => $row['lifting_height'],
            'max_height_extended' => $row['max_height_extended'],
            'height_of_overhead_guard' => $row['height_of_overhead_guard'],
            'seat_height_relating_to_sip' => $row['seat_height_relating_to_sip'],
            'overall_length_with_fork' => $row['overall_length_with_fork'],
            'overall_length_without_fork' => $row['overall_length_without_fork'],
            'overall_width' => $row['overall_width'],
            'fork_dimension' => $row['fork_dimension'],
            'fork_carriage' => $row['fork_carriage'],
            'distance_across_fork_arm' => $row['distance_across_fork_arm'],
            'ground_clearance_at_mast' => $row['ground_clearance_at_mast'],
            'ground_clearance_center_of-wheel' => $row['ground_clearance_center_of_wheelbase'],
            'right_angle_stacking_aisle_width_for_pallet_1000x1200mm' => $row['right_angle_stacking_aisle_width_for_pallet_1000x1200mm'],
            'right_angle_stacking_aisle_width_for_pallet_800x1200mm' => $row['right_angle_stacking_aisle_width_for_pallet_800x1200mm'],
            'min_outside_turning_radius' => $row['min_outside_turning_radius'],
            'travel_speed' => $row['travel_speed'],
            'lift_speed' => $row['lift_speed'],
            'lowering_speed' => $row['lowering_speed'],
            'max_drawbar_pull' => $row['max_drawbar_pull'],
            'max_gradeability' => $row['max_gradeability'],
            'acceleration_time' => $row['acceleration_time'],
            'battery_type' => $row['battery_type'],
            'battery_capacity' => $row['battery_capacity'],
            'battery_weight' => $row['battery_weight'],
            'drive_motor_rating' => $row['drive_motor_rating'],
            'lifting_motor_rating' => $row['lifting_motor_rating'],
            'drive_motor_control_mode' => $row['drive_motor_control_mode'],
            'lifting_motor_control_mode' => $row['lift_motor_control_mode'],
            'service_break_type' => $row['service_break_type'],
            'parking_break_type' => $row['parking_break_type'],
            'operating_pressure_for_attachment' => $row['operating_pressure_for_attachment'],
            'engine_model' => $row['engine_model'],
            'engine_rated_power_rated_speed' => $row['engine_rated_power_rated_speed'],
            'max_torque_rated_speed' => $row['max_torque_rated_speed'],
            'fuel_consumption' => $row['fuel_consumption'],
            'gearbox' => $row['gearbox'],

        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:hpt',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:hpt',

        ];
    }
}
