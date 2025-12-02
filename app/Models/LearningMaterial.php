<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LearningMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'material_type',
        'file',
        'thumbnail',
        'status',
        'author_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($material) {
            $material->slug = Str::slug($material->title);
        });

        static::updating(function ($material) {
            if ($material->isDirty('title')) {
                $material->slug = Str::slug($material->title);
            }
        });
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
