<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Filter\booksSearchFilter;

class searchFilter extends Controller
{
	/* Метод, який здійснює пошук інформації через фільтр */
    public function searchFilter(Request $request){

    $books = Book::with('authors');

    /* Створюємо новий клас, в якому і будемо прописувати параметри і інші функції */
    $books = (new booksSearchFilter($books, $request))->apply()->paginate(10);

    return view('front.index',['books' => $books]);
     /* compact('books') вместо ['books' => $books] */

  }
}
