<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'id',
        'main_img',
        'phone_img',
        'link',
    ];

    protected $hidden = [
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $table = 'home';
}
