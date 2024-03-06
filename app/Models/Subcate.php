<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcate extends Model
{
    use HasFactory;
    protected $table = 'sub_cate';
    
    
     public function category()
    {
        return $this->belongsTo(equipment::class, 'cate_id');
    }
}
