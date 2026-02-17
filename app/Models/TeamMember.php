<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'position',
        'category',
        'photo',
        'email',
        'phone',
        'bio',
        'order',
        'status',
        'category'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($member) {
            $member->slug = Str::slug($member->name);
        });

        static::updating(function ($member) {
            $member->slug = Str::slug($member->name);
        });
    }
}
