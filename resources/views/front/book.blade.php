@extends('front.layouts.app_front')

@section('title', 'Моя библиотека')

@section('content')


<div class="container">

<!-- Виводмо компоненти з потрібною інформацією -->
 @component('front.components.breadcrumb')
    @slot('title') Выбранная книга @endslot
    @slot('parent') Главная @endslot
    @slot('active') Ваша книга @endslot
  @endcomponent


<div class="row">
  <hr>
<!-- Таблиця з вибраною книгою -->
  <div class="col-sm-12">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Ваша книга</h2>
    </div>

  <table class="table table-striped">

    <thead>
    <tr>
      <th class="table-primary">Название</th>
      <th class="table-primary">Автор</th>
      <th class="table-primary">Жанр </th>
      <th class="table-primary">Цена</th>
      <th class="table-primary">Cтр</th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>
    </tr>
    </thead>

    <tbody>
      <!--  Виводимо інформацію по книгам з БД  -->
      <tr>
        <td class="table-warning">{{$books->b_name}}</td>
        <td class="table-warning">{{$books->authors[0]->a_name}}</td>
        <td class="table-warning">{{$books->genres[0]->g_name}}</td>
        <td class="table-warning">{{$books->price}}</td>
        <td class="table-warning">{{$books->pages}}</td>
        <td class="table-warning">{{$books->b_slug}}</td>
        <td class="table-warning">{{$books->language}}</td>
        <td class="table-warning">{{$books->status}}</td>
      </tr>
    </tbody>

  </table>

  </div>
</div>

<!--  Виводимо інформацію по результатам відпраки коментарів  -->
@include('front.partials.flash')

<hr>

<!-- Підключаємо вивід коментарів -->
@include('front.comments.comments')

<div class="row">
    <!-- Місце для відправки коментарів -->
  <div class="col-sm-12">
    <div class="card-footer text-white bg-dark">
    <h6 class="text-center">Оставить комментарий</h6>
    </div>

<!-- Підключаємо форму для коментарів -->
@include('front.comments.form')

  </div>
</div>


</div>
@endsection
