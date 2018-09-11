<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Filter\booksFilter;

class filterController extends Controller
{
    /* В методі створюємо новий клас, в якому і будемо прописувати умови */
     public function filter(Request $request)
    {

    
    $books = Book::with('authors');

    $books = (new booksFilter($books, $request))->apply()->paginate(10);


    return view('front.index',['books' => $books]);


	}
}
