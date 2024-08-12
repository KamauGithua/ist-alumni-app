<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'status', 'alumni',
    ];

    const STATUS_PENDING = 'pending';
    const STATUS_PUBLISHED = 'published';

    // public function student()
    // {
    //     return $this->belongsTo(User::class, 'alumni');
    // }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
