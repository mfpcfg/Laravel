<?php

namespace App\Http\Controllers\library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Author;
use App\Genre;

 /**
    *
    * Прописуємо лічильник для кожної категорії в адмін частині
    * 
    */

class libraryController extends Controller
{
    public function library(){
      return view('library.library',[
      	'count_books' => Book::count(),
      	'count_authors' => Author::count(),
      	'count_genres' => Genre::count(),
      ]);
    }
}
