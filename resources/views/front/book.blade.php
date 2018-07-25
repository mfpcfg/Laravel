@extends('front.layouts.app_front')

@section('title', 'Library')

@section('content')

   
<div class="container"> 

 @component('front.components.breadcrumb')
    @slot('title') Выбранная книга @endslot
    @slot('parent') Главная @endslot
    @slot('active') Ваша книга @endslot
  @endcomponent
 
<div class="row">
  <hr>
  
<!-- Таблица с книгами -->    
    <div class="col-sm-12">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Ваша книга</h2>
    </div>

  <table class="table table-striped">
    <thead>
      <th class="table-primary">Название</th>
      <th class="table-primary">Автор</th>
      <th class="table-primary">Жанр</th>
      <th class="table-primary">Цена</th>
      <th class="table-primary">Cтр</th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>
    </thead>
    <tbody>
      <tr>
        <td class="table-warning">{{$book->name}}</td>
        @foreach($book->authors as $author)
        <td class="table-warning">{{$author->name}}</td>
        @endforeach
        @foreach($book->genres as $genre)
        <td class="table-warning">{{$genre->name}}</td>
        @endforeach
        <td class="table-warning">{{$book->price}}</td>
        <td class="table-warning">{{$book->pages}}</td>
        <td class="table-warning">{{$book->slug}}</td>
        <td class="table-warning">{{$book->language}}</td>
        <td class="table-warning">{{$book->status}}</td>
      </tr>     
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
