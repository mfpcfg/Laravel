<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Comment;
use App\User;
use Zttp\Zttp;



class commentsController extends Controller
{
    /* Метод, який здійснює перевірку і додавання коментарів */
    public function addComment(Request $request)
    {

        /* Параметри, які потрібні при створенні коментарів  */
    	$body = $request->input('body');
    	$book_id = (int)$request->input('book_id');
    	$user_id = auth()->user()->id;


        /* Бібліотека Zttp компонує наші HTTP запроси при перевірці Google reCAPTCHA */
        $response = Zttp::asFormParams()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LdSzmsUAAAAAB8ANm-oGfJ63P30l_5EeAEg8bz2',
            'response' => request('g-recaptcha-response'),
            'remoteip' => request()->ip(),
        ]);

         /* Перевірка на відмітку Google reCAPTCHA */
         if($response->json()['success'] !== true){


           return redirect()->back()->withFlashMessage('Извените! Ваш комментарий не был добавлен, Вам нужно поставить отметку в поле "Я не робот"');

        }

        /* Після перевірки створюємо новий об єкт і передаємо параметри */
        $comments = new Comment();
        $comments = $comments->create([

            'user_id' => $user_id,
            'book_id' => $book_id,
            'body'    => $body,

        ]);

        /* Перевірка і повідомлення про успішну публікацію коментаря */
        if($comments){
            return redirect()->back()->withFlashMessage("Спасибо! Ваш комментарий был опубликован");
        }

    }

}
