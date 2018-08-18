@extends('front.layouts.app_front')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">
    <div class="row">
    <!-- Таблица фильтров -->
    <div class="col-sm-2">
    <div class="card-footer text-white bg-dark">
    <h4>Фильтры</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form class="was-validated" action="{{route('index.filter')}}" method="post">
{{ csrf_field() }}

@include('front.filter')

</form>
    </div>

    <!-- Таблица с книгами -->
    <div class="col-sm-10">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Книги</h2>
    </div>

  <table class="table table-striped">
    <thead>
      <th class="table-primary"><a href="{{route('index.sort',['name','desc'])}}">⇩</a>Название<a href="{{route('index.sort',['name','asc'])}}">⇧</a></th>

      <th class="table-primary"><a href="#">⇩</a>Автор<a href="#">⇧</a></th>

      <th class="table-primary"><a href="#">⇩</a>Жанр<a href="#">⇧</a></th>
      <th class="table-primary"><a href="{{route('index.sort',['price','desc'])}}">⇩</a>Цена<a href="{{route('index.sort',['price','asc'])}}">⇧</a> </th>
      <th class="table-primary"><a href="{{route('index.sort',['pages','desc'])}}">⇩</a>Cтр<a href="{{route('index.sort',['pages','asc'])}}">⇧</a></th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>

    </thead>
    <tbody>
      @forelse($book as $b)
      <tr>
        <td class="table-warning"><a href="{{route('front.book', $b->slug)}}">{{$b->name}}</a></td>
        @foreach($b->authors as $author)
        <td class="table-warning">{{$author->name}}</td>
        @endforeach
        @foreach($b->genres as $genre)
        <td class="table-warning">{{$genre->name}}</td>
        @endforeach
        <td class="table-warning">{{$b->price}}</td>
        <td class="table-warning">{{$b->pages}}</td>
        <td class="table-warning">{{$b->slug}}</td>
        <td class="table-warning">{{$b->language}}</td>
        <td class="table-warning">{{$b->status}}</td>
      </tr>

      @empty
      <tr>
        <td colspan="10" class="text-center"><h3>Книги отсутствуют</h3></td>
      </tr>
      @endforelse

</div>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">

          </ul>
        </td>
      </tr>

    </tfoot>

  </table>

    </div>


    </div>
  </div>
@endsection
