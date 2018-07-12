@extends('library.layouts.app_book')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список книг @endslot
    @slot('parent') Главная @endslot
    @slot('active') Книги @endslot
  @endcomponent

  <hr>

  <a href="{{route('book.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">Добавить книгу</i></a>
  <table class="table table-striped">
    <thead>
      <th>Название</th>
      <th>Автор</th>
      <th>Жанр</th>
      <th>Цена</th>
      <th>Кол стр</th>
      <th>Slug</th>
      <th>Язык</th>
      <th>Автор жив?</th>
    </thead>
    <tbody>
      @forelse($book as $b)
      <tr>
        <td>{{$b->name}}</td>
        @foreach($b->authors as $a)
        <td>{{$a->name}}</td>
        @endforeach
        @foreach($b->genres as $g)
        <td>{{$g->name}}</td>
        @endforeach
        <td>{{$b->price}}</td>
        <td>{{$b->pages}}</td>
        <td>{{$b->slug}}</td>
        <td>{{$b->language}}</td>
        <td>{{$b->status}}</td>
         <!-- Начинаем прописывать удаление -->
        <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="{{route('book.destroy', $b)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

                  <a href="{{route('book.edit', ['id'=>$b->id])}}"><i class="fas fa-edit"></i></a>

                  <button type="submit" class="btn"><i class="fas fa-trash"></i></button>

            </form>
          </td>
           <!-- закончили удаление удаление -->
      </tr>

      @empty
      <tr>
        <td colspan="6" class="text-center"><h3>Данные отсутствуют</3></td>
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
