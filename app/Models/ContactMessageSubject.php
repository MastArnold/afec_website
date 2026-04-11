<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessageSubject extends Model
{
    protected $table = "contact_message_subjects";
    protected $fillable = [
        'name',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function messages()
    {
        return $this->hasMany(ContactMessage::class, 'subject_id');
    }
}
