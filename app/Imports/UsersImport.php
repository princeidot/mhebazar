<?php

namespace App\Imports;

use App\Models\htpuploaddata;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new htpuploaddata([
            'title' => $row['title'],
            'description' => $row['description'],
            'Manufacturer' => $row['manufacturer'],
            'Model' => $row['model'],
            'Capacity' => $row['capacity'],
            'Operator_Type' => $row['operator_type'],
            'Width_Over_Forks' => $row['width_over_forks'],
            'Fork_Width' => $row['fork_width'],
            'Fork_Length' => $row['fork_length'],
            'Min_Height' => $row['min_height'],
            'Lift_Height' => $row['lift_height'],
            'Max_Lift_Height' => $row['max_lift_height'],
            'Single_Fork_Width' => $row['single_fork_width'],
            'Wheel_Type' => $row['wheel_type'],
            'Service_Weight' => $row['service_weight'],
            'Overall_Length' => $row['overall_length'],
            'Overall_Height' => $row['overall_height'],
            'Turning_Radius' => $row['turning_radius'],
            'Material' => $row['material'],
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
