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

        $books = Book::paginate(10);

        return view('front.index', [
          'books' => $books,
          ]);
    }

     public function sort($s='id', $d='d')
    {

     $books = Book::orderby($s, $d)->paginate(10);

  /*$books->load(['authors' => function ($query) {
    $query->orderBy($s, $d)->paginate(10);
}]);*/
  
/* 'books' => Book::orderby($s, $d)->paginate(10),*/
  return view('front.index',[
    'books' => $books,
]);
    }

     public function filter(Request $request)
    {

    $data['authors'] = Author::all();


    $books = Book::orderby ('price')->with('authors');

    if($request->input('price'))
{
  $price = explode("_", $_POST['price']);

  $books->where('price','>=',$price[0])->where('price','<=',$price[1]);
}

if($request->input('pages'))
{
  $pages = explode("_", $_POST['pages']);

  $books->where('pages','>=',$pages[0])->where('pages','<=',$pages[1]);
}

if($request->input('language'))
{
  $books->where('language','=',$_POST['language']);
}


$data['books'] = $books->paginate(10);


return view('front.index', $data);

/*
if (isset ($_POST['price']) ){
if($_POST['price'] == '0_100')
{
  $book->where('price','<=','100');
}elseif($_POST['price'] == '100_200')
{
  $book->where('price','>=','100')->where('price','<=','200');
}elseif($_POST['price'] == '200')
{
  $book->where('price','>=','200');
}
}

if (isset ($_POST['pages']) ){

if ($_POST['pages'] == '50_150')
{
  $book->where('pages','>=','50')->where('pages','<=','150');
}elseif($_POST['pages'] == '150_300')
{
  $book->where('pages','>=','150')->where('pages','<=','300');
}elseif($_POST['pages'] == '300')
{
  $book->where('pages','>=','300');
}

}

if (isset ($_POST['language']) ){
if ($_POST['language'] == 'UKR')
{
  $book->where('language','=','UKR');
}elseif($_POST['language'] == 'RUS')
{
  $book->where('language','=','RUS');
}elseif($_POST['language'] == 'US')
{
  $book->where('language','=','US');
}
}

if (isset ($_POST['authors']) ){

}*/

/*
if (isset ($_POST['price']) ){

  $price = explode("_", $_POST['price']);

  $book->where('price','>=',$price[0])->where('price','<=',$price[1]);

}
if (isset ($_POST['pages']) ){

  $pages = explode("_", $_POST['pages']);

  $book->where('pages','>=',$pages[0])->where('pages','<=',$pages[1]);

}

if (isset ($_POST['language']) ){


  $book->where('language','=',$_POST['language']);

}*/



/*if( $request->input('language') == 'UKR')
{
  $book->where('language','=','UKR')->paginate(10);
}elseif( $request->input('language') == 'RUS')
{
  $book->where('language','=','RUS')->paginate(10);
}elseif( $request->input('language') == 'US')
{
  $book->where('language','=','US')->paginate(10);
}*/

}

  
    public function slug($slug)
    {

        $books = Book::whereB_slug($slug)->firstOrFail();

        return view('front.book', [

        'books' => $books,
      ]);
    }
  }
