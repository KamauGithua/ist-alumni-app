<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'basic_info', 'education', 'work_experience', 'skills', 'personal_projects', 
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
