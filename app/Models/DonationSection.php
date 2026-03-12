<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationSection extends Model
{
    protected $fillable = [
        'title', //string
        'content', //text
        'subtitle', //string
        'is_active',
        'updated_by',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
