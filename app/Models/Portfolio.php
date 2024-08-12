<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'bio', 'education', 'work_experience', 'skills', 'projects', 'profile_picture',
    // ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
