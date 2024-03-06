<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allpro extends Model
{
    use HasFactory;
    protected $table = 'allpro';
    protected $fillable = [
        'cate_id',
        'sub_id',
        'user_id',
        'title',
        'img1',
        'img2',
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
    
    public function category()
    {
        return $this->belongsTo(equipment::class, 'cate_id');
    }
        public function subcategory()
    {
        return $this->belongsTo(Subcate::class, 'sub_id');
    }
    public function vendor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     public function userData()
    {
        return $this->belongsTo(userinfos::class, 'user_id', 'userid');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    }
    
}
