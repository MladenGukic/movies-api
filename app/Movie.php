<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    public static function search($searchTerm,$take)
    {
        return Movie::where('title','LIKE', "%{$searchTerm}%")
                        ->orderBy('title')
                        ->take($take)
                        ->get();
    }

}
