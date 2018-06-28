@extends('library.layouts.app_author')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список авторов @endslot
    @slot('parent') Главна @endslot
    @slot('active') Автора @endslot
  @endcomponent

</div>

@endsection
