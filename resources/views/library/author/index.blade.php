@extends('library.layouts.app_author')

@section('content')

<div class="container">

  @component('library.components.breadcrumb')
    @slot('title') Список авторов @endslot
    @slot('parent') Главна @endslot
    @slot('active') Автора @endslot
  @endcomponent

  <a href="{{route('author.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o">Добавить автора</i></a>
    <table class="table table-striped">
      <thead>
        <th>Название</th>
        <th>Автор жив?</th>
      </thead>
      <tbody>
        @forelse($author as $a)
        <tr>
          <td>{{$a->name}}</td>
          <td>{{$a->alive}}</td>
          <td>
             <a href="{{route('author.edit', ['id'=>$author->id])}}"><i class="fa fa-edit"></i></a>
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
              {{$author->links()}}
            </ul>
          </td>
        </tr>
      </tfoot>

    </table>

  </div>

  @endsection
