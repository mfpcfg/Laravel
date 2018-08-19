<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['b_name', 'price', 'pages', 'b_slug', 'language', 'status', 'created_at', 'updated_at'];

    public static function boot()
{
    parent::boot();

    static::saving(function($book) {
        $book->b_slug = str_slug($book->b_name);

        return true;
    });
}


    public function authors(){

      return $this->belongsToMany('App\Author','book_author');
    }

      public function genres(){

      return $this->belongsToMany('App\Genre','book_genre');
    }
}
