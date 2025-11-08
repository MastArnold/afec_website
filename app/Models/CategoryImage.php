<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    protected $table = 'category_image';
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'name';
    public $incrementing = false;

    use HasFactory;
}
