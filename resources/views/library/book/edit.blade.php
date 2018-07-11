@extends('library.layouts.app_book')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Редактировать книгу @endslot
    @slot('parent') Главная @endslot
    @slot('active') Книги @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="{{route('book.update', $book)}}" method="post">
	<input type="hidden" name="_method" value="put">
 {{ csrf_field() }}

 @include('library.book.partials.form')

</form>
</div>

@endsection