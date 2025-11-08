<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'no',
        'name',
        'title',
        'description',
        'status',
        'is_public',
        'created_by',
        'updated_by'
    ];

    use HasFactory;
}
