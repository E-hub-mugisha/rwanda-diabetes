<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchItem extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'summary', 'content', 'file',
        'external_link', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(ResearchCategory::class, 'category_id');
    }
}
