<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
   public function posts()
   {
    return $this->hasManythrough(Posts::class, User::class);
   }
    use HasFactory;
}
