<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    protected $fillable = [
        'id',
        'socialmediatype',
        'embed_code',

    ];

    protected $hidden = [
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $table = 'socialmedia';
}
