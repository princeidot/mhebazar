<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class htpuploaddata extends Model
{
    protected $table = 'hpt';
    protected $fillable = [
        'title',
        'description',
        'ldescription',
        'Manufacturer',
        'Model',
        'Capacity',
        'Operator_Type',
        'Width_Over_Forks',
        'Fork_Width',
        'Fork_Length',
        'Min_Height',
        'Lift_Height',
        'Max_Lift_Height',
        'Single_Fork_Width',
        'Wheel_Type',
        'Service_Weight',
        'Overall_Length',
        'Overall_Height',
        'Turning_Radius',
        'Material',
    ];
    
}
