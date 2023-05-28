<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'localisation',
    ];

    public function users()
{
    return $this->belongsToMany(User::class, 'user_club', 'club_id', 'user_id');
}
}
