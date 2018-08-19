<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Genre extends Model
{
  protected $fillable = ['g_name', 'g_slug', 'created_at', 'updated_at'];


public static function boot()
{
    parent::boot();

    static::saving(function($genre) {
        $genre->g_slug = str_slug($genre->g_name);

        return true;
    });
}


  public function books(){
     return $this->belongsToMany('App\Book','book_genre');
   }
  
 }
