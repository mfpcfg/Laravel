<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Author;
use App\Genre;
use DB;
use App\Filter\booksFilter;
use App\User;

class frontController extends Controller
{

     /* Виводимо всі книги */
     public function all()
    {

        $books = Book::paginate(10);

        return view('front.index', [
          'books' => $books,
          ]);
    }

    /* Метод, який приймає 2-ва параметра(назва колонки, вид сортування) і здійснює сортування даних */
     public function sort($s='id', $d='d')
    {

     $books = Book::orderby($s, $d)->paginate(10);

    return view('front.index',[
    'books' => $books,
      ]);
    }

    /* В методі створюємо новий клас, в якому і будемо прописувати умови */
     public function filter(Request $request)
    {

    
    $books = Book::with('authors');

    $books = (new booksFilter($books, $request))->apply()->paginate(10);


    return view('front.index',['books' => $books]);


}

  /* Метод, який прописує слаг в адресний рядок при відкритті книги */
    public function slug($slug)
    {

        $books = Book::whereB_slug($slug)->firstOrFail();

        $comments = $books->comments()->paginate(10);
        

        return view('front.book', [

        'books' => $books,
        'comments' => $comments,
        
      ]);
    }
  }


/* Деякі варіанти для фільтрації даних(всі працюють)
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