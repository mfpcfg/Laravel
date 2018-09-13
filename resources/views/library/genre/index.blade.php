@extends('library.layouts.app_genre')

@section('title', 'Моя библиотека')

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
      <th class="table-primary">Наименование</th>
      <th class="table-primary">Slug</th>
      <th class="text-right table-primary">Действие</th>
    </thead>
    <tbody>
      @forelse($genres as $genre)
      <tr>
        <td class="table-warning">{{$genre->g_name}}</td>
        <td class="table-warning">{{$genre->g_slug}}</td>
        <!-- Начинаем прописывать удаление -->
          <td class="text-right table-warning">
            <form onsubmit="if(confirm('Удалить?')){ return true } else { return false }" action="{{route('genre.destroy', $genre)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

                  <a href="{{route('genre.edit', $genre)}}"><i class="fas fa-edit"></i></a>

                  <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>

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
        <td colspan="9" class="table-primary">
          <ul class="pagination pull-right">
            {{$genres->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>

  </table>
</div>

@endsection
