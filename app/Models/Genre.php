<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genre;

class Genre extends Model
{
    use HasFactory;

    //A Genre has many films
    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
