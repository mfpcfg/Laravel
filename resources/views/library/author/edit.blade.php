@extends('library.layouts.app_author')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Редактировать автора @endslot
    @slot('parent') Главная @endslot
    @slot('active') Авторы @endslot
  @endcomponent

<hr>

<form class="form horizontal" action="{{route('author.update', $author)}}" method="post">
	<input type="hidden" name="_method" value="put">
 {{ csrf_field() }}

 @include('library.author.partials.form')

</form>
</div>

@endsection