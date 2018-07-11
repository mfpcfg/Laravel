<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'price', 'pages', 'slug', 'language', 'status', 'created_at', 'updated_at'];

    public function author(){

     /* $book_author = Book::find(1)->author()->orderBy('name')->get();	*/
      /*$book_author = Book::find(1)->author()->attach(1);*/

      return $this->belongsToMany('App\Author','book_author', 'book_id', 'author_id');
    }

      public function genre(){

      /*$book_genre = Book::find(1)->genre()->orderBy('name')->get();*/
      /*$book_genre = Book::find(1)->genre()->attach(1);*/

      return $this->belongsToMany('App\Genre','book_genre', 'book_id', 'genre_id');
    }
}
