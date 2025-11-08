<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSN extends Model
{
    protected $table = 'contact_sn';
    protected $fillable = [
        'name',
        'icon',
        'type',
        'url',
        'order'
    ];

    use HasFactory;
}
