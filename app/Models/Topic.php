<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'image',
        'desc',
        'content',
        'is_top',
        'is_hot',
    ];
}
