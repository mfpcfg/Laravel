<?php

/* Встановлюємо автоматичну генерацію слагів. Прописуємо зворотній зв язок з книгами. */

namespace App;

use Illuminate\Database\Eloquent\Model;



class Genre extends Model
{

  /* Дозволяємо вносити зміни в дані колонки */
  protected $fillable = ['g_name', 'g_slug', 'created_at', 'updated_at'];


public static function boot()
{
    parent::boot();

    /* При додаванні нового жанру, генеруємо автоматичний слаг */
    static::saving(function($genre) {
        $genre->g_slug = str_slug($genre->g_name);

        return true;
    });
}


  /* Прописуємо зв язок з книгами */
  public function books(){
     return $this->belongsToMany('App\Book','book_genre');
   }
  
 }
