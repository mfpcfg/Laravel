<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Genre extends Model
{
  protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];


public static function boot()
{
    parent::boot();

    static::saving(function($genre) {
        $genre->slug = str_slug($genre->name);

        return true;
    });
}


  public function book(){
     return $this->belongsToMany('Book');
   }
 }
