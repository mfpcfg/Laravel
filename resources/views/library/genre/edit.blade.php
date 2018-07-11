@extends('library.layouts.app_genre')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Редактировать жанр @endslot
    @slot('parent') Главная @endslot
    @slot('active') Жанры @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="{{route('genre.update', $genre)}}" method="post">
	<input type="hidden" name="_method" value="put">
 {{ csrf_field() }}

 @include('library.genre.partials.form')

</form>
</div>

@endsection