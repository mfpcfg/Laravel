<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $fillable = ['name', 'created_at', 'updated_at'];

  public function newGenre(){
    return $this->hasOne(app/Genre, 'name');
  }
}
