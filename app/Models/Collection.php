<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function videos()
    {
        return $this->morphmany(Video::class, 'watchable');
    }
    use HasFactory;
}
