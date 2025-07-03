<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $primaryKey = 'guest_id';
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'notification_preferences',
    ];

    protected $casts = [
        'notification_preferences' => 'array',
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_guest', 'guest_id', 'group_id');
    }
}