@extends('front.layouts.app_front')

@section('title', 'Library')

@section('content')
<div class="container">

 @component('front.components.breadcrumb')
    @slot('title') Выбранная книга @endslot
    @slot('parent') Главная @endslot
    @slot('active') Книга @endslot
  @endcomponent

  <hr>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2 class="text-center">Ваша книга</h2>
                  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
        @foreach($book->authors as $a)
        <td class="table-warning">{{$a->name}}</td>
        @endforeach
        @foreach($book->genres as $g)
        <td class="table-warning">{{$g->name}}</td>
        @endforeach
        <td class="table-warning">{{$book->price}}</td>
        <td class="table-warning">{{$book->pages}}</td>
        <td class="table-warning">{{$book->slug}}</td>
        <td class="table-warning">{{$book->language}}</td>
        <td class="table-warning">{{$book->status}}</td>
      </tr>


  </table>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
