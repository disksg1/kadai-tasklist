<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'status','user_id'];

    public function getStatusNameAttribute()
    {
        return config('status.'.$this->status);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
