<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getStatusNameAttribute()
    {
        return config('status.'.$this->status);
    }
}
