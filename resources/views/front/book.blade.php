@extends('front.layouts.app_front')

@section('title', 'Library')

@section('content')

   
<div class="container"> 

 @component('front.components.breadcrumb')
    @slot('title') Выбранная книга @endslot
    @slot('parent') Главная @endslot
    @slot('active') Ваша книга @endslot
  @endcomponent
 
<div class="row">
  <hr>
  
<!-- Таблица с книгами -->    
    <div class="col-sm-12">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Ваша книга</h2>
    </div>

  <table class="table table-striped">
    <thead>
      <th class="table-primary">Название</th>
      <th class="table-primary">Автор</th>
      <th class="table-primary">Жанр </th>
      <th class="table-primary">Цена</th>
      <th class="table-primary">Cтр</th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>
    </thead>
    <tbody>
      <tr>
        <td class="table-warning">{{$books->b_name}}</td>
        
        <td class="table-warning">{{$books->authors[0]->a_name}}</td>
        
        
        <td class="table-warning">{{$books->genres[0]->g_name}}</td>
   
        <td class="table-warning">{{$books->price}}</td>
        <td class="table-warning">{{$books->pages}}</td>
        <td class="table-warning">{{$books->b_slug}}</td>
        <td class="table-warning">{{$books->language}}</td>
        <td class="table-warning">{{$books->status}}</td>
      </tr>     
</div>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">

          </ul>
        </td>
      </tr>

    </tfoot>

  </table>

    </div>
    </div>


    <div class="row">
    <!-- Таблица фильтров --> 
    <div class="col-sm-12">
    <div class="card-footer text-white bg-dark">
    <h6 class="text-center">Оставить комментарий</h6>
    </div>

<form action="" method="get">
{{ csrf_field() }}

<textarea name="comment" cols="155" rows="3"></textarea><br>
<input class="btn btn-dark" type="submit" value="Отправить">

</form>
    </div>
  </div>


  </div>
@endsection
