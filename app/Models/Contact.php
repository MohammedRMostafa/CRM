<?php

namespace App\Models;

use App\Models\Scopes\UserContactsScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_number', 'company', 'job', 'email', 'user_id',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new UserContactsScope);
    }
}
