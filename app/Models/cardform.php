<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cardform extends Model
{
    protected $fillable = [
        'user_id',
        'photo',
        'full_name',
        'title',
        'department',
        'company',
        'headline',
        'email',
        'phone',
        'fb',
        'ins',
        'link',
        'color'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
