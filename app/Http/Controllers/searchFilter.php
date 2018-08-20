<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\booksSearchFilter;

class searchFilter extends Controller
{
    public function searchFilter(Request $request){

    $books = Book::with('authors');

    /* передаём функции в класс booksSearchFilter */
    
    $books = (new booksSearchFilter($books, $request))->apply()->paginate(10);

    return view('front.index',['books' => $books]);
     /* compact('books') вместо ['books' => $books] */

  }
}
