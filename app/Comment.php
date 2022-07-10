<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = "comments";

    protected $fillable = [
        'comments', 'user_id', 'todo_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function todo()
    {
        return $this->belongsTo(Todo::class, 'todo_id', 'id');
    }
}
