<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Спочатку видаляємо всі дані за допомогою функції truncate */
    	App\Book::truncate();
    	App\Genre::truncate();
    	App\Author::truncate();

        /* За допомогою функції factory наповнюємо свою БД а також прописуємо відношення з іншими таблицями */
        factory(App\Book::class, 50)->create()->each(function($books) {
        $books->authors()->save(factory(App\Author::class)->make());
        $books->genres()->save(factory(App\Genre::class)->make());
        });
    }
}
