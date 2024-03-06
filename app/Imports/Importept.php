<?php

namespace App\Imports;

use App\Models\ept;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class Importept implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ept([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'width_over_forks' => $row['width_over_forks'],
            'load_center_for_rated_capacity' => $row['load_center_for_rated_capacity'],
            'travel_speed' => $row['travel_speed'],
            'lift_speed' => $row['lift_speed'],
            'lowering_speed' => $row['lowering_speed'],
            'gradient' => $row['gradient'],
            'battery_type' => $row['battery_type'],
            'battery_weight' => $row['battery_weight'],
            'battery_capacity' => $row['battery_capacity'],
            'service_weight' => $row['service_weight'],
            'wheelbase' => $row['wheelbase'],
            'overall_width' => $row['overall_width'],
            'overall_length' => $row['overall_length'],
            'lift_height' => $row['lift_height'],
            'fork_lowering_height' => $row['fork_lowering_height'],
            'fork_dimensions' => $row['fork_dimensions'],
            'ground_clearance' => $row['ground_clearance'],
            'turning_radius' => $row['turning_radius'],
            'type_of_drive_motor' => $row['type_of_drive_motor'],
            'tyres' => $row['tyres'],
            'tyre_size_drive' => $row['tyre_size_drive'],
            'tyre_size_load' => $row['tyre_size_load'],
            'support_rollers' => $row['support_rollers'],
            'number_of_wheels' => $row['number_of_wheels'],
            'lift_motor_rating' => $row['lift_motor_rating'],
            'drive_motor_rating' => $row['drive_motor_rating'],
            'drive_control' => $row['drive_control'],  
        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:ept',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:ept',

        ];
    }
}
