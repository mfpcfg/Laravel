@extends('library.layouts.app_genre')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Добавить жанр @endslot
    @slot('parent') Главная @endslot
    @slot('active') Жанры @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="/Laravel/public/library/genre" method="post">
 {{ csrf_field() }}

 @include('library.genre.partials.form')

</form>
</div>

@endsection
