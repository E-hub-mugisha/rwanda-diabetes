<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Story extends Model
{
    protected $fillable = [
        'title', 'slug', 'author_name', 'location',
        'excerpt', 'content', 'featured_image',
        'type', 'status', 'published_at', 'created_by'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($story) {
            $story->slug = Str::slug($story->title);
        });

        static::updating(function ($story) {
            if ($story->isDirty('title')) {
                $story->slug = Str::slug($story->title);
            }
        });
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
