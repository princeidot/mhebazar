<?php

namespace App\Imports;

use App\Models\stacker;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportStacker implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new stacker([
            'title' => $row['title'],
            'description' => $row['description'],
            'Manufacturer' => $row['manufacturer'],
            'Model' => $row['model'],
            'Capacity' => $row['capacity'],
            'Operator_Type' => $row['operator_type'],
            'Width_Over_Forks' => $row['width_over_forks'],
            'mast_type' => $row['mast_type'],
            'load_center_for_rated_capacity' => $row['load_center_for_rated_capacity'],
            'wheel_base' => $row['wheel_base'],
            'wheel_type' => $row['wheel_type'],
           
            'number_of_wheels' => $row['number_of_wheels'],
            'lift_height' => $row['lift_height'],
            'max_extended_height' => $row['max_extended_height'],
            'lowered_height' => $row['mast_lowered_height'],
            'lowered_fork_height' => $row['lowered_fork_height'],
            'fork_dimensions' => $row['fork_dimensions'],
            'overall_length' => $row['overall_length'],
            'overall_width' => $row['overall_width'],
            'turning_radius' => $row['turning_radius'],
            'MinAisleWidth' => $row['min_aisle_width'],
            'MinGroundClearance' => $row['min_ground_clearance'],
            'TravelSpeed' => $row['travel_speed'],
            'LiftSpeed' => $row['lift_speed'],
            'LoweringSpeed' => $row['lowering_speed'],
            'Gradient' => $row['gradient'],
            'DriveMotor' => $row['drive_motor'],
            'LiftMotor' => $row['lift_motor'],
            'SteeringMotor' => $row['steering_motor'],
            'BatteryType' => $row['battery_type'],
            'BatteryCapacity' => $row['battery_capacity'],
            'Controler' => $row['controler'],
            'BatteryWeight' => $row['battery_weight'],
            'ServiceWeight' => $row['service_weight'],


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
