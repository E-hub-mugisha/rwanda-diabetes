<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name','slug','logo','website','email','phone',
        'description','type','status'
    ];
}
