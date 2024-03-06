<?php

namespace App\Imports;

use App\Models\mpt;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class Importmpt implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mpt([
            'title' => $row['title'],
            'sdescription' => $row['description'],
            'ldescription' => $row['ldescription'],
            'manufacturer' => $row['manufacturer'],
            'model' => $row['model'],
            'capacity' => $row['capacity'],
            'operator_type' => $row['operator_type'],
            'wheel_base' => $row['wheel_base'],
            'platform_size' => $row['platform_size'],
            'platform_height' => $row['platform_height'],
            'handle_height' => $row['handle_height'],
            'overall_length' => $row['overall_length'],
            'overall_width' => $row['overall_width'],
            'overall_height' => $row['overall_height'],
            'wheel_type' => $row['wheel_type'],
        ]);
    }
    public function rules(): array
    {
        return [
            'title' => 'required|unique:mpt',

            // Above is alias for as it always validates in batches
            '*.title' => 'required|unique:mpt',

        ];
    }
}
