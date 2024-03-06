<?php

namespace App\Imports;

use App\Models\towtruck;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Importtowtruck implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new towtruck([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'Model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'rated_towing_ability' => $row['rated_towing_ability'],
            'max_towing_capacity' => $row['max_towing_capacity'],
            'turning_radius' => $row['turning_radius'],
            'travelspeed' => $row['travel_speed_ladenunladen'],
            'overall_length' => $row['overall_length'],
            'overall_width' => $row['overall_width'],
            'overall_height' => $row['overall_height'],
            'drive_motor_rating' => $row['drive_motor_rating'],
            'gradient' => $row['gradient_ladenunladen'],
            'battery_type' => $row['battery_type'],
            'battery_capacity' => $row['battery_capacity'],
            'controler' => $row['controler'],
            'battery_weight' => $row['battery_weight'],
            'service_weight' => $row['service_weight_incl_battery'],
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
