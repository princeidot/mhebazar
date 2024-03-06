<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _dock__leveller extends Model
{
    protected $table = '_dock__leveller';
      protected $fillable = [
        'title',
        'sdescription', 
        'ldescription',
        'manufacturer',
        'Model',
        'capacity',
        'operator_type',
        'Static_Load',
        'Dynamic_Load',
        'Working_Range_Above',
        'Working_Range_Below',
        'Platform_Length',
        'Platform_Width',
        'Lip_Length',
        'Lip_width',
        'Lip_Extention',
        'Lip_Operation',
        'lip_flap_sheet_thickness',
        'Pit_Length',
        'Pit_Width',
        'Pit_Height',
        'Lifting_Cylinder_No',
        'lip_cylinder',
        'bumper',
        'Motor_Rating',
        'platform_railing_height',
        'ramp_overall_length',
        'ramp_overall_width',
        'power_pack',
        'platform_material',
        'minimum_height',
        'type',
      ];
}
