<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $primaryKey = 'group_id';
    protected $fillable = [
        'name',
    ];

    public function guests()
    {
        return $this->belongsToMany(Guest::class, 'group_guest', 'group_id', 'guest_id');
    }
}