<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genre;

class Film extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'title',
        'time',
        'fsk',
        'releasedate',
        'genre_id'
    ];

    //A Film belongs to a Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
