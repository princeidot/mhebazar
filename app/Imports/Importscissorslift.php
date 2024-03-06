<?php

namespace App\Imports;

use App\Models\scissorslift;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Importscissorslift implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new scissorslift([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'platform_length' => $row['platform_length'],
            'platform_width' => $row['platform_width'],
            'platform_height' => $row['platform_height'],

            'lift_height' => $row['lift_height'],
            'total_lift_height' => $row['total_lift_height'],
            'overall_length' => $row['overall_length'],
            'overall_width ' => $row['overall_width'],

            'hydraulic_cylinder_no' => $row['hydraulic_cylinder_no'],
            'floor_lock_no' => $row['floor_lock_no'],
            'floor_lock_type' => $row['floor_lock_type'], 
            'no_of_wheel' => $row['no_of_wheel'],  
            'wheel_type' => $row['wheel_type'],
            'wheel_dimensions' => $row['wheel_dimensions'],
            'platform_extension' => $row['platform_extension'],

            'platform_extention_type' => $row['platform_extention_type'],
            'capacity_on_extented_platform' => $row['capacity_on_extented_platform'],
            'wheel_base' => $row['wheel_base'],
            'ground_clearance' => $row['ground_clearance'],
            'self_weight' => $row['self_weight'],
            'turning_radoius' => $row['turning_radoius'],
            'travel_speed' => $row['travel_speed'],
            'lifting_speed' => $row['lifting_speed'],
            'power_source' => $row['power_source'],
                
         ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:scissorslift',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:scissorslift',

        ];
    }
}
