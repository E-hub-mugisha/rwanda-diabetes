<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Program extends Model
{
    protected $fillable = [
        'title', 'slug', 'image', 'short_description', 'content', 'status', 'category_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            $program->slug = Str::slug($program->title);
        });

        static::updating(function ($program) {
            $program->slug = Str::slug($program->title);
        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
