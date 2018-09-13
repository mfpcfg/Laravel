<!-- Перевірка на авторизованого користувача -->
@if(\Auth::check())
<form action="/comments" method="post">
{{ csrf_field() }}

<input type="hidden" value="{{ $books->id }}" name="book_id">

<textarea name="body" cols="50" rows="3" class="textarea-width"></textarea><br>

<div class="g-recaptcha" data-sitekey="6LdSzmsUAAAAAAj9h8NvT4O1c0dL4aM5hZR0z2-4" data-theme="dark"></div>

<input class="btn btn-dark" type="submit" value="Отправить">

</form>
<!-- Інформація, яку бачить не зареєстрований користувач -->
@else
<h4 class="text-center">Чтобы оставить комментарий нужно:</h4>
<p class="text-center"><a href="{{ route('login') }}">Войти</a> или <a href="{{ route('register') }}">Зарегистрироваться</a></p>

@endif