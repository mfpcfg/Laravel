<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'price', 'pages', 'size', 'language', 'status', 'created_at', 'updated_at'];

    public function author(){
      return $this->belongsToMany('Author');
    }

      public function genre(){
      return $this->belongsToMany('Genre');
    }
}
