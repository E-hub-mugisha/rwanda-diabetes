<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchCategory extends Model
{
    protected $fillable = ['name', 'slug', 'type'];

    public function items()
    {
        return $this->hasMany(ResearchItem::class, 'category_id');
    }
}
