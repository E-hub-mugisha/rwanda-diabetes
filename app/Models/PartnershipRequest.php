<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnershipRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization',
        'name',
        'email',
        'phone',
        'type',
        'message',
        'status',
    ];
}
