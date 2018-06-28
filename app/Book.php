<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'price', 'pages', 'size', 'language', 'status', 'created_at', 'updated_at'];

    public function newBook(){
      return $this->hasMany(self::class, 'name');
    }
}
