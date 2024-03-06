<?php

namespace App\Imports;

use App\Models\rackingsystem;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Importracking implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new rackingsystem([
            'title' => $row['title'],
            'sdescription' => $row['sdescription'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'model' => $row['model'],
            'capacity' => $row['capacity'],
            'type_of_load' => $row['type_of_load'],
            'type_of_pallet' => $row['type_of_pallet'],
            'size_of_pallet' => $row['size_of_pallet'],
            'pallet_unit_load' => $row['pallet_unit_load'],
            'floor_dimension' => $row['floor_dimension'],
            'aisle_width_available' => $row['aisle_width_available'],
            'warehouse_clear_height' => $row['warehouse_clear_height'],
            'equipment_to_be_used' => $row['equipment_to_be_used'],
            'equipment_width' => $row['equipment_width'],
            'straddle_width' => $row['straddle_width'],
            'floor_layout' => $row['floor_layout'],
            'section_details' => $row['section_details'],

        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:rackingsystem',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:rackingsystem',

        ];
    }
}
