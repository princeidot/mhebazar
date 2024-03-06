<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
   
  protected $fillable = [
        'description'
  ];
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('M d, Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('M d, Y');
    }

    public function getReadingTimeAttribute()
    {
        $wordsPerMinute = 200;
        $descriptionLength = str_word_count($this->description);
        $readingTimeMinutes = ceil($descriptionLength / $wordsPerMinute);
        return $readingTimeMinutes;
    }
    public function category()
        {
            return $this->belongsTo(equipment::class, 'blog_category');
        }
}
