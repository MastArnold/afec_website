<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'slug',
        'year',
        'category_id',
        'cover_path',
        'cover_name',
        'cover_type',
        'date',
        'status',
        'is_public',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'date'      => 'date',
        'is_public' => 'boolean',
        'status'    => ProjectStatus::class,
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class, 'project_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'project_images', 'project_id', 'image_id')
                    ->withPivot('created_by')
                    ->withTimestamps();
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
