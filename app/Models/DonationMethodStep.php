<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DonationMethodStep extends Model
{
    protected $fillable = [
        'donation_method_id',
        'content',
    ];

    public function donationMethod(): BelongsTo
    {
        return $this->belongsTo(DonationMethod::class);
    }
}
