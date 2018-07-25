@extends('library.layouts.app_book')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список книг @endslot
    @slot('parent') Главная @endslot
    @slot('active') Книги @endslot
  @endcomponent

  <hr>

  <a href="{{route('book.create')}}" class="btn btn-dark pull-right"><i class="fa fa-plus-square-o">Добавить книгу</i></a>
  <table class="table table-striped">
    <thead>
      <th class="table-primary">Название</th>
      <th class="table-primary">Автор</th>
      <th class="table-primary">Жанр</th>
      <th class="table-primary">Цена</th>
      <th class="table-primary">Кол стр</th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>
      <th class="text-right table-primary">Действие</th>
    </thead>
    <tbody>
      @forelse($book as $b)
      <tr>
        <td class="table-warning">{{$b->name}}</td>
        @foreach($b->authors as $a)
        <td class="table-warning">{{$a->name}}</td>
        @endforeach
        @foreach($b->genres as $g)
        <td class="table-warning">{{$g->name}}</td>
        @endforeach
        <td class="table-warning">{{$b->price}}</td>
        <td class="table-warning">{{$b->pages}}</td>
        <td class="table-warning">{{$b->slug}}</td>
        <td class="table-warning">{{$b->language}}</td>
        <td class="table-warning">{{$b->status}}</td>
         <!-- Начинаем прописывать удаление -->
        <td class="text-right table-warning">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="{{route('book.destroy', $b)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

                   <a href="{{route('book.edit', ['id'=>$b->id])}}"><i class="fas fa-edit"></i></a> 

                  <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>

            </form>

<!--
            <form onsubmit="if(confirm('Редактировать?')){ return true } else { return false }" action="{{route('book.edit', $b)}}" method="post">
              {{ csrf_field() }}

                  <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>

            </form>
-->

          </td>
           <!-- закончили удаление удаление -->
      </tr>

      @empty
      <tr>
        <td colspan="9" class="text-center"><h3>Данные отсутствуют</3></td>
      </tr>
      @endforelse
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">
            {{$book->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>

  </table>

</div>

@endsection
