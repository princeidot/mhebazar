<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfos extends Model
{
    use HasFactory;
     protected $fillable = ['id', 'name', 'pcode', 'address', 'userid','', 'email', 'mno', 'gst', 'address2', 'landmark', 'city', 'state', 'alternate_phone','created_at', 'updated_at'];

    
    public function product()
    {
        return $this->hasMany(allpro::class, 'userid', 'user_id'); 
    }
       public function userData()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}
