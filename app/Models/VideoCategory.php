<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    //

    protected $fillable = [
        'name',
        'created_by',
        'updated_by',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class, 'category_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
