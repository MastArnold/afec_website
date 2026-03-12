<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMission extends Model
{
    protected $table = 'about_mission';

    protected $fillable = [
        'title',
        'image',
        'content',
        'updated_by'
    ];

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
