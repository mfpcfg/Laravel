@extends('library.layouts.app_book')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список книг @endslot
    @slot('parent') Главна @endslot
    @slot('active') Книги @endslot
  @endcomponent

  <hr>

  <a href="{{route('book.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">Добавить книгу</i></a>
  <table class="table table-striped">
    <thead>
      <th>Название</th>
      <th>Цена</th>
      <th>Кол стр</th>
      <th>Размер</th>
      <th>Язык</th>
      <th>Автор жив?</th>
    </thead>
    <tbody>
      @forelse($book as $b)
      <tr>
        <td>{{$b->name}}</td>
        <td>{{$b->price}}</td>
        <td>{{$b->pages}}</td>
        <td>{{$b->size}}</td>
        <td>{{$b->language}}</td>
        <td>{{$b->status}}</td>
        <td>
           <a href="{{route('book.edit', ['id'=>$book->id])}}"><i class="fa fa-edit"></i></a>
        </td>
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
