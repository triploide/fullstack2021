<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_date',
        'length',
        'genre_id',
        'price',
    ];

    // Esto genera un atributo que devuelve una instancia del modelo Genre
    // $movie->genre (como atributo) -> Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tagsToHtml()
    {
        $html = '';

        foreach($this->tags as $tag) {
            $html .= $tag->value . ', ';
        }

        return $html;
    }
}
