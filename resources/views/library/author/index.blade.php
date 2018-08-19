@extends('library.layouts.app_author')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список авторов @endslot
    @slot('parent') Главная @endslot
    @slot('active') Автора @endslot
  @endcomponent

  <a href="{{route('author.create')}}" class="btn btn-dark pull-right"><i class="fa fa-plus-square-o">Добавить автора</i></a>
    <table class="table table-striped">
      <thead>
        <th class="table-primary">Название</th>
        <th class="table-primary">Автор жив?</th>
        <th class="text-right table-primary">Действие</th>
      </thead>
      <tbody>
        @forelse($authors as $author)
        <tr>
          <td class="table-warning">{{$author->a_name}}</td>
          <td class="table-warning">{{$author->alive}}</td>
         <!-- Начинаем прописывать удаление -->
          <td class="text-right table-warning">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="{{route('author.destroy', $author)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
                
              <a href="{{route('author.edit', $author)}}"><i class="fas fa-edit"></i></a>

                  <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>

            </form>      
          </td>
          <!-- закончили удаление -->
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
              {{$authors->links()}}
            </ul>
          </td>
        </tr>
      </tfoot>

    </table>

  </div>

  @endsection