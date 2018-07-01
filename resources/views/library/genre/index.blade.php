@extends('library.layouts.app_genre')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список жанров @endslot
    @slot('parent') Главная @endslot
    @slot('active') Жанры @endslot
  @endcomponent


  <hr>

  <a href="{{route('genre.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">Добавить жанр</i></a>
  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse($genre as $g)
      <tr>
        <td>{{$g->name}}</td>
        <td>
           <a href="{{route('genre.edit', ['id'=>$g->id])}}"><i class="fa fa-edit"></i></a>
        </td>
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
