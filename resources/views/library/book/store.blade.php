@extends('library.layouts.app_book')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список книг @endslot
    @slot('parent') Главна @endslot
    @slot('active') Книги @endslot
  @endcomponent

</div>

@endsection
