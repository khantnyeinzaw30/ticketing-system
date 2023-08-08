<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'status', 'priority', 'user_id', 'agent_id', 'category_id', 'label_id', 'resolved_at'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'tickets_categories');
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class, 'tickets_labels');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function agent()
    {
        return $this->belongsTo(User::class);
    }
}
