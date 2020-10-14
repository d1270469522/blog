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
        'content_html',
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

    public function scopeRecentReplied($query)
    {
        // 当话题有新回复时，我们将编写逻辑来更新话题模型的 reply_count 属性，
        // 此时会自动触发框架对数据模型 updated_at 时间戳的更新
        return $query->orderBy('updated_at', 'desc');
    }

    public function hotTopics()
    {
        return $this->where(['is_hot' => 1])->get(['id', 'title']);
    }

    public function topTopics()
    {
        return $this->where(['is_top' => 1])->get();
    }
}
