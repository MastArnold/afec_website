<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $fillable = [
        'page_id',
        'title',
        'description',
        'image',
        'link',
        'status',
        'order',
        'is_public',
        'created_by',
        'updated_by',
        'published_at',
        'published_by',
    ];

    use HasFactory;
}
