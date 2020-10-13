<?php

namespace App\Models;

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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWithOrder($query, $order)
    {
        // 不同的排序，使用不同的数据读取逻辑
        switch ($order) {
            case 'recent':
                $query->recent();
                break;

            default:
                $query->recentReplied();
                break;
        }
    }
}
