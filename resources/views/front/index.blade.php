@extends('front.layouts.app_front')

@section('title', 'Library')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2 class="text-center">Книги</h2>
                  </div>

             

                    <table class="table table-striped">
    <thead>
      <th class="table-primary"><a href="{{route('index.sort',['name','desc'])}}">⇩</a>Название<a href="{{route('index.sort',['name','asc'])}}">⇧</a></th>
     
      <th class="table-primary"><a href="#">⇩</a>Автор<a href="#">⇧</a></th>
       
      <th class="table-primary"><a href="#">⇩</a>Жанр<a href="#">⇧</a></th>
      <th class="table-primary"><a href="{{route('index.sort',['price','desc'])}}">⇩</a>Цена<a href="{{route('index.sort',['price','asc'])}}">⇧</a> </th>
      <th class="table-primary"><a href="{{route('index.sort',['pages','desc'])}}">⇩</a>Cтр<a href="{{route('index.sort',['pages','asc'])}}">⇧</a></th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>
    </thead>
    <tbody>
      @forelse($book as $b)
      <tr>
        <td class="table-warning"><a href="{{route('front.book', $b->slug)}}">{{$b->name}}</a></td>
        @foreach($b->authors as $a)
        <td class="table-warning">{{$a->name}}</td>
        @endforeach
        @foreach($b->genres as $g)
        <td class="table-warning">{{$g->name}}</td>
        @endforeach
        <td class="table-warning">{{$b->price}}</td>
        <td class="table-warning">{{$b->pages}}</td>
        <td class="table-warning">{{$b->slug}}</td>
        <td class="table-warning">{{$b->language}}</td>
        <td class="table-warning">{{$b->status}}</td>
      </tr>

      @empty
      <tr>
        <td colspan="6" class="text-center"><h3>Книги отсутствуют</3></td>
      </tr>
      @endforelse

</div>
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

       
</div>



<div class="filt-panel">
  <div class="card-footer">
       <h3>Фильтры</h3>
   </div>

<form action="#" mathod="post">

@include('front.filter')

</form>
@endsection
