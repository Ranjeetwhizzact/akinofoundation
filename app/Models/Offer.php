<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'id',
        'banner',
    ];

    protected $hidden = [
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $table = 'offers';
}
