<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_book_create()
    {

    /* За допомогою функції factory(допомогає записувати дані в БД) створюємо нову книгу */
     $book = factory(\App\Book::class)->create();

     /* Перевіряємо її запис в БД, вказуємо загульну кількість після додавання */
     $this->assertEquals(51, $book->count());

    }

    public function test_author_create()
    {

     $author = factory(\App\Author::class)->create();

     $this->assertEquals(51, $author->count());

    }

    public function test_genre_create()
    {

     $genre = factory(\App\Genre::class)->create();

     $this->assertEquals(51, $genre->count());

    }
}
