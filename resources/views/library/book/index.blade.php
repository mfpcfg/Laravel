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
    <tr>
      <th class="table-primary">Название</th>
      <th class="table-primary">Автор</th>
      <th class="table-primary">Жанр</th>
      <th class="table-primary">Цена</th>
      <th class="table-primary">Cтр</th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>
      <th class="text-right table-primary">Действие</th>
    </tr> 
    </thead>
    <tbody>
      @forelse($books as $book)
      <tr>
        <td class="table-warning">{{$book->b_name}}</td>
        <td class="table-warning">{{$book->authors[0]->a_name}}</td>
        <td class="table-warning">{{$book->genres[0]->g_name}}</td>
        <td class="table-warning">{{$book->price}}</td>
        <td class="table-warning">{{$book->pages}}</td>
        <td class="table-warning">{{$book->b_slug}}</td>
        <td class="table-warning">{{$book->language}}</td>
        <td class="table-warning">{{$book->status}}</td>
         <!-- Начинаем прописывать удаление -->
        <td class="text-right table-warning">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="{{route('book.destroy', $book)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

                   <a href="{{route('book.edit', ['id'=>$book->id])}}"><i class="fas fa-edit"></i></a> 

                  <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>

            </form>

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
        <td colspan="9" class="table-primary">
          <ul class="pagination pull-right">
            {{$books->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>

  </table>

</div>

@endsection
