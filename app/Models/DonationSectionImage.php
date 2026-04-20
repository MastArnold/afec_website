<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationSectionImage extends Model
{
    protected $fillable = [
        'image_id',
    ];

    protected $with = ['image'];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
