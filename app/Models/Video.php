<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function parent()
    {
        return $this->morphto(watchable);
    }
    use HasFactory;
}