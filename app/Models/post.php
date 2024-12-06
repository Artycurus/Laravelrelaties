<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [];
    
    public function comments()
    {
        return $this->hasmany(comment::class);
    }


    public function tags()
    {
        return $this->belongstomany(tag::class)->withTimestamps();
    }
}




