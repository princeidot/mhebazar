<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rackingsystem extends Model
{
 protected $table = 'rackingsystem';
    protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
        'manufacturer',
        'model',
        'capacity',
        'type_of_load',
        'type_of_pallet',
        'size_of_pallet',
        'pallet_unit_load',
        'floor_dimension',
        'aisle_width_available',
        'warehouse_clear_height',
        'equipment_to_be_used',
        'equipment_width',
        'straddle_width',
        'floor_layout',
        'section_details',
    ];
}
