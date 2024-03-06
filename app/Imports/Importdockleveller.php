<?php

namespace App\Imports;

use App\Models\_dock__leveller;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Importdockleveller implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new _dock__leveller([
            
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'Model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'Static_Load' => $row['static_load'],
            'Dynamic_Load' => $row['dynamic_load'],
            'Working_Range_Above' => $row['working_range_above'],
            'Working_Range_Below' => $row['working_range_below'],
            'Platform_Length' => $row['platform_length'],
            'Platform_Width' => $row['platform_width'],
            'Lip_Length' => $row['lip_length'],
            'Lip_width' => $row['lip_width'],
            'Lip_Extention' => $row['lip_extention'],
            'Lip_Operation' => $row['lip_operation'],
            'lip_flap_sheet_thickness' => $row['lip_flap_sheet_thickness'],
            'Pit_Length' => $row['pit_length'],
            'Pit_Width' => $row['pit_width'],
            'Pit_Height' => $row['pit_height'],
            'Lifting_Cylinder_No' => $row['lifting_cylinder_no'],
            'lip_cylinder' => $row['lip_cylinder'],
            'bumper' => $row['bumper'],
            'Motor_Rating' => $row['motor_rating'],
            'platform_railing _height' => $row['platform_railing_height'],
            'ramp_overall_length' => $row['ramp_overall_length'],
            'ramp_overall_width' => $row['ramp_overall_width'],
            'power_pack' => $row['power_pack'],
            'platform_material' => $row['platform_material'],
            'minimum_height' => $row['minimum_height'],
            'type' => $row['type'],
        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:_dock__leveller',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:_dock__leveller',

        ];
    }
}
