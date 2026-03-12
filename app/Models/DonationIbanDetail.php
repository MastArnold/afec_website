<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DonationIbanDetail extends Model
{
    protected $fillable = [
        'donation_method_id',
        'label',
        'detail',
        'created_by',
        'updated_by',
    ];

    public function donationMethod(): BelongsTo
    {
        return $this->belongsTo(DonationMethod::class);
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
