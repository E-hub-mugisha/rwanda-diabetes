<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ResearchItem extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'summary', 'content', 'file',
        'external_link', 'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($research) {
            $research->slug = Str::slug($research->title);
        });

        static::updating(function ($research) {
            $research->slug = Str::slug($research->title);
        });
    }
    public function category()
    {
        return $this->belongsTo(ResearchCategory::class, 'category_id');
    }
}
