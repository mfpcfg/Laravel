@extends('library.layouts.app_genre')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список жанров @endslot
    @slot('parent') Главная @endslot
    @slot('active') Жанры @endslot
  @endcomponent


  <hr>

  <a href="{{route('genre.create')}}" class="btn btn-dark pull-right"><i class="fa fa-plus-square-o">Добавить жанр</i></a>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse($genre as $g)
      <tr>
        <td>{{$g->name}}</td>
        <!-- Начинаем прописывать удаление -->
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="{{route('genre.destroy', $g)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

                  <a href="{{route('genre.edit', $g)}}"><i class="fas fa-edit"></i></a>

                  <button type="submit" class="btn"><i class="fas fa-trash"></i></button>

            </form>      
          </td>
          <!-- закончили удаление удаление -->
      </tr>

      @empty
      <tr>
        <td colspan="3" class="text-center"><h3>Данные отсутствуют</3></td>
      </tr>
      @endforelse
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">
            {{$genre->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>

  </table>
</div>

@endsection
