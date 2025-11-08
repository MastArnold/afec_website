<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'is_public',
        'created_by',
        'updated_by',
        'published_at',
        'published_by'
    ];

    use HasFactory;
}
