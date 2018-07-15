<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Author;
use App\Genre;
use DB;

class frontController extends Controller
{
     public function all()
    {

        return view('front.index', [
          'book' => Book::paginate(10),

        ]);
    }

     public function sort($s='id', $d='desc')
    {     
  
        return view('front.index', [

          'book' => Book::orderby($s, $d)->paginate(10),
          /*'authors'     => Author::with('authors')->orderby($s, $d)->paginate(10),*/
          /*'genres'      => Genre::orderby($s, $d)->paginate(10),*/

        ]);
    }


    public function slug($slug)
    {
       
        $book = Book::whereSlug($slug)->firstOrFail();
        
        return view('front.book', [

        'book' => $book,
          
        ]);
          
    }
}
