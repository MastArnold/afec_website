<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DonationMethod extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'initials',
        'color',
        'field',
        'value',
        'copy_value',
        'note',
        'is_active',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function ibanDetails(): HasMany
    {
        return $this->hasMany(DonationIbanDetail::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(DonationMethodStep::class);
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
