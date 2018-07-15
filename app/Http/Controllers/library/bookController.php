<?php

namespace App\Http\Controllers\library;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use App\Genre;
use DB;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('library.book.index', [
          'book' => Book::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $genres  = Genre::all();

        return view('library.book.create', [
          'book'        => [],
          'authors'     => $authors,
          'genres'      => $genres,
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $book = Book::create($request->all());
       /*var_dump($request->all());*/

      if($request->input('authors')){
        $book->authors()->attach($request->input('authors'));
      }

      if($request->input('genres')){
        $book->genres()->attach($request->input('genres'));
      }

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

        $authors = Author::all();
        $genres  = Genre::all();

        return view('library.book.edit', [
        'book' => $book,
        'authors'     => $authors,
        'genres'      => $genres,

      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

        $book->authors()->detach();
        $book->genres()->detach();

        $book->update($request->all());
        
        if($request->input('authors')){
        $book->authors()->attach($request->input('authors'));
      }

      if($request->input('genres')){
        $book->genres()->attach($request->input('genres'));
      }

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {

          $book->authors()->detach();
          $book->genres()->detach();

         $book->delete();

        return redirect()->route('book.index');
    }

}
