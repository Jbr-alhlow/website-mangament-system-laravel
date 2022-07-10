<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodact extends Model
{
    protected $table = "prodact";

    protected $fillable = [
        'name', 'discripe', 'img','price','type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
