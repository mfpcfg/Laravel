<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];

  public function book(){
     return $this->belongsToMany('Book');
   }
 }
