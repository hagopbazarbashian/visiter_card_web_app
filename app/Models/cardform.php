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
        'date',
        'email',
        'phone',
        'color',
        'color_code',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function socelmedia()
    {
        return $this->hasMany(socelmedia::class);
    }


}
