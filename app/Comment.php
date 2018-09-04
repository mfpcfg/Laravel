<?php

/* Прописуємо зворотній зв язок з книгами */

namespace App;

use Illuminate\Database\Eloquent\Model;



class Comment extends Model
{

	protected $fillable = ['user_id', 'book_id', 'body','created_at', 'updated_at'];

    public function books(){
    	return $this->belongsTo('App\Book');
    }
    
}
