<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $primaryKey = 'notification_id';
    protected $fillable = [
        'title',
        'type',
        'channel',
        'message',
        'send_at',
        'group_id'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}