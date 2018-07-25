@extends('library.layouts.app_book')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Добавить книгу @endslot
    @slot('parent') Главная @endslot
    @slot('active') Книги @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="/Laravel/public/library/book" method="post">
 {{ csrf_field() }}

 @include('library.book.partials.form')
 
</form>
</div>

@endsection



