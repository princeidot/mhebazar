<?php

namespace App\Imports;

use App\Models\containerhandler;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class Importcontainerhen implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new containerhandler([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'load_center_for_rated_capacity' => $row['load_center_for_rated_capacity'],
            'max_handling_layers' => $row['max_handling_layers'],
            'length_of_container_lifted' => $row['length_of_container_lifted'],
            'max_rotary_lock_height' => $row['max_rotary_lock_height'],
            'min_rotary_lock_height' => $row['min_rotary_lock_height'],
            'lifting_speed' => $row['lifting_speed'],
            'lowering_speed' => $row['lowering_speed'],
            'mast_tilt' => $row['mast_tilt'],
            'traveling_speed' => $row['traveling_speed'],
            'min_turning_radius' => $row['min_turning_radius'],
            'max_gradeability' => $row['max_gradeability'],
            'overall_length' => $row['overall_length'],
            'overall_width' => $row['overall_width'],
            'overall_height' => $row['overall_height'],
            'wheel_base' => $row['wheel_base'],
            'tread' => $row['tread'],
            'min_under_clearance' => $row['min_under_clearance'],
            'lateral_displacement_of_spreader' => $row['lateral_displacement_of_spreader'],
            'engine_manufacturer' => $row['engine_manufacturer'],
            'engine_model' => $row['engine_model'],
            'wheel_number' => $row['wheel_number'],
            'engine_rated_power_rated_speed' => $row['engine_rated_power_rated_speed'],
            'max_torque_rated_speed' => $row['max_torque_rated_speed'],
            'fuel_consumption' => $row['fuel_consumption'],
            'gearbox' => $row['gearbox'],
            'tyre_type' => $row['tyre_type'],
            'tyre_size_front' => $row['tyre_size_front'],
            'tyre_size_rear' => $row['tyre_size_rear'],

        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:containerhandler',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:containerhandler',

        ];
    }
}
