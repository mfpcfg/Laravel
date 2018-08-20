<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class searchFilter extends Controller
{
    public function searchFilter(Request $request){

    $books = Book::with('authors');

      if($request->has('b_name')){
        $books->where('b_name', 'like', "%$request->b_name%");
      }

      

      if($request->has('a_name')){
      $books->whereHas('authors',function ($query) use ($request){
        $query->where('a_name', 'like', "%$request->a_name%");
      });
    }

        if($request->has('g_name')){
            $books->whereHas('genres',function ($query) use ($request){
                $query->where('g_name', 'like', "%$request->g_name%");
            });
        }

      $books = $books->get();

      return view('front.index', compact('books'));

  }
}
