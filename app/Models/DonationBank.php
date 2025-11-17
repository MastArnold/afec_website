<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationBank extends Model
{
    //

    protected $fillable = [
        'transfert_name',
        'transfert_no',
        'created_by',
        'updated_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
