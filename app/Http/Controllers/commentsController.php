<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Comment;
use App\User;
use Zttp\Zttp;



class commentsController extends Controller
{
    public function addComment(Request $request){


    	$body = $request->input('body');
    	$book_id = (int)$request->input('book_id');
    	$user_id = auth()->user()->id;

    

        $response = Zttp::asFormParams()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LdSzmsUAAAAAB8ANm-oGfJ63P30l_5EeAEg8bz2',
            'response' => request('g-recaptcha-response'),
            'remoteip' => request()->ip(),
        ]);

      
/*
    	if($comment){
    		return back();
    	}

    	return back();*/
         if($response->json()['success'] !== true){

           
           return redirect()->back()->withFlashMessage('Извените! Ваш комментарий не был добавлен, Вам нужно поставить отметку в поле "Я не робот"');
 
        }

        $comments = new Comment();
        $comments = $comments->create([

            'user_id' => $user_id,
            'book_id' => $book_id,
            'body'    => $body,

        ]);
/*
        if($comment){
            return redirect()->back()->withFlashMessage("Спасибо! Ваш комментарий был опубликован");
        }

    }
*/
    return view('comment.add',['comment' => $comment]);
    
}
