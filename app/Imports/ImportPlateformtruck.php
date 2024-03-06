<?php

namespace App\Imports;

use App\Models\platform_truck;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportPlateformtruck implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new platform_truck([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'Model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'plateform' => $row['platform'],
            'operation' => $row['operation'],
            'wheel_base' => $row['wheel_base'],
            'batteryWeight' => $row['battery_weight'],
            'serviceWeight' => $row['service_weight'],
            'tyres' => $row['tyres'],
            'tyre_size_front' => $row['tyre_size_front'],
            'tyre_size_rear' => $row['tyre_size_rear'],
            'n_o_w' => $row['number_of_wheels'],
            'track_width' => $row['track_width_front_rear'],
            'overall_length' => $row['overall_length'],
            'overall_width' => $row['overall_width'],
            'battery_compartment' => $row['battery_compartment_wxl'],
            'turning_radius' => $row['turning_radius'],
            'platform_size' => $row['platform_size'],
            'platform_height' => $row['platform_height'],
            'towing_height' => $row['towing_height'],
            'TravelSpeed' => $row['travel_speed_ladenunladen'],
            'Gradient' => $row['gradient'],
            'service_brake_type' => $row['service_brake_type'],
            'parking_brake_type' => $row['parking_brake_type'],
            'drive_motor_rating' => $row['drive_motor_rating'],
            'drive' => $row['drive'],
            'BatteryType' => $row['battery_type'],
            'BatteryCapacity' => $row['battery_capacity'],
            'charger_capacity' => $row['charger_capacity'],
            'drive_control' => $row['drive_control'],
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
