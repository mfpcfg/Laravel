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

        $authors = Author::all();
        return view('front.index', [
          'book' => Book::paginate(10),
          'authors' => $authors,
        ]);
    }

     public function sort($s='id', $d='d')
    {

  $book = Book::all();
  $authors = Author::all();

  return view('front.index',[
    'book' => Book::orderby($s, $d)->paginate(10),
    'authors' => $authors,
  ]);

    }

     public function filter()
    {
      $data['authors'] = Author::all();

    /*if (isset($_POST['price'])){

            $book->where('price','<=',$_POST['price'])->paginate(10);
          } else {
            $book->all()->paginate(10);
          }

          $data['book']=$book;

        return view('front.index', $data);*/
  $book = Book::orderby ('price')->with('authors');

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
//  $book->where('authors.id', $_POST['authors']);
  //$book->authors()->where('id','=',$_POST['authors']);
  //$Дописать Мне (Keeper)
  //dd ($book);

}



$data['book'] = $book->paginate(10);


return view('front.index', $data);

/*if( $request->input('language') == 'UKR')
{
  $book->where('language','=','UKR')->paginate(10);
}elseif( $request->input('language') == 'RUS')
{
  $book->where('language','=','RUS')->paginate(10);
}elseif( $request->input('language') == 'US')
{
  $book->where('language','=','US')->paginate(10);
}else
{
  $book->all()->paginate(10);
}
$data['book']=$book;

return view('front.index', $data);
/*
if ($_POST['price'] == '0_100')
{
  $book->where('price','<=','100')->paginate(10);
}elseif($_POST['price'] == '100_200')
{
  $book->where('price','>=','100')->where('price','<=','200')->paginate(10);
}elseif($_POST['price'] == '200')
{
  $book->where('price','>=','200')->paginate(10);
}
$data['book']=$book;

return view('front.index', $data);*/
}

    public function slug($slug)
    {

        $book= Book::whereSlug($slug)->firstOrFail();

        return view('front.book', [

        'book' => $book,
      ]);
    }
  }
