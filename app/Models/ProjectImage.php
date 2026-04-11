<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table = 'project_images';
    protected $fillable = [
        'project_id',
        'image_id',
        'created_by',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
