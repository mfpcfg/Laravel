@extends('library.layouts.app_author')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Добавить автора @endslot
    @slot('parent') Главная @endslot
    @slot('active') Авторы @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="/Laravel/public/library/author" method="post">
 {{ csrf_field() }}

 @include('library.author.partials.form')

</form>

</div>

@endsection  


