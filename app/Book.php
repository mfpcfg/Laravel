<?php

/* Встановлюємо автоматичну генерацію слагів. Прописуємо зв язки з авторами, жанрами, коментарами. */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     /* Дозволяємо вносити зміни в дані колонки */
    protected $fillable = ['b_name', 'price', 'pages', 'b_slug', 'language', 'status', 'created_at', 'updated_at'];

    public static function boot()
{
    parent::boot();

    /* При додаванні нової книги, генеруємо автоматичний слаг */
    static::saving(function($book) {
        $book->b_slug = str_slug($book->b_name);

        return true;
    });
}


    /* Прописуємо зв язок з авторами, жанрами і коментарями */
    public function authors(){

      return $this->belongsToMany('App\Author','book_author');
    }

      public function genres(){

      return $this->belongsToMany('App\Genre','book_genre');
    }

    public function comments(){
      return $this->hasMany('App\Comment');
    }

}
