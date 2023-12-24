<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socelmedia extends Model
{
    protected $fillable = [
        'cardform_id',
        'facebook',
        'pinterest',
        'twitter',
        'instagram',
        'whatsapp',
        'youtube'
    ];

    public function user()
    {
        return $this->belongsTo(cardform::class, 'cardform_id');
    }
}
