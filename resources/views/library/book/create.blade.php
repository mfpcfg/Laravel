@extends('library.layouts.app_book')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Добавить книгу @endslot
    @slot('parent') Главна @endslot
    @slot('active') Книги @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="{{('library.book.store')}}" method="post">
 {{ csrf_field() }}

 @include('library.book.partials.form')
 
</form>
</div>

@endsection
