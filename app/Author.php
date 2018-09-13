<?php

/* Прописуємо автоматичну генерацію слагів при додаванні нового автора. І встановлюємо зворотній зв язок з книгами */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

  /* Дозволяємо вносити зміни в дані колонки */
  protected $fillable = ['a_name','a_slug', 'alive', 'created_at', 'updated_at'];


public static function boot()
{
    parent::boot();

    /* При додаванні нового автора, генеруємо автоматичний слаг */
    static::saving(function($author) {
        $author->a_slug = str_slug($author->a_name.'-'.rand(0,time()));

        return true;
    });
}

  /* Прописуємо зв язок з книгами */
  public function books(){
     return $this->belongsToMany('App\Book','book_author');
   }

 }
