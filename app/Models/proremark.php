<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proremark extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'pid', '', 'remark', 'created_at', 'updated_at',
        
    ];
    protected $table = 'proremark';
}
