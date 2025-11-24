<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Automatically generate slug when creating/updating
    public static function boot()
    {
        parent::boot();

        static::saving(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function materials()
    {
        return $this->hasMany(LearningMaterial::class, 'category_id');
    }
    public function programs()
    {
        return $this->hasMany(Program::class, 'category_id');
    }
}
