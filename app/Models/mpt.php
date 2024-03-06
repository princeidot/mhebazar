<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mpt extends Model
{
    protected $table = 'mpt';
    protected $fillable = [
        'title',
        'sdescription',
        'ldescription',
        'manufacturer', 
        'model', 
        'capacity',
        'operator_type', 
        'wheel_base',
        'platform_size',
        'platform_height',
        'handle_height',
        'overall_length',
        'overall_width',
        'overall_height',
        'wheel_type',

    ];
}
