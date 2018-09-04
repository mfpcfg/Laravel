<?php

/* Прописуємо функцію, яка встановлює зв язок з БД User, за допомогою функції витягуємо будь-яку інформацію */

if(!function_exists('user')){

     function user($user_id)
    {
        $user = App\User::find($user_id);
        if(!$user) {
        	
            return abort(404);
        }

        return $user;
    }
}

?>