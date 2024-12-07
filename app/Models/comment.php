<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function like($user = null)
    {
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
     
    }   
    

    public function likes()
    {
        
        return $this->morphTomany(user::class, 'likable')->withTimestamps();

    }   
       
       
}