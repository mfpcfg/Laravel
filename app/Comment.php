<?php

/* Прописуємо зворотній зв язок з книгами */

namespace App;

use Illuminate\Database\Eloquent\Model;



class Comment extends Model
{
	/* Дозволяємо вносити зміни в дані колонки */
	protected $fillable = ['user_id', 'book_id', 'body','created_at', 'updated_at'];

	/* Прописуємо зв язок книгами */
    public function books(){
    	return $this->belongsTo('App\Book');
    }
    
}
