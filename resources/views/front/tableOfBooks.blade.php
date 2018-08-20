    <!-- Таблица с книгами -->
    <div class="col-sm-8">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Книги</h2>
    </div>

  <table class="table table-striped">
    <thead>
      <th class="table-primary"><a href="{{route('index.sort',['b_name','desc'])}}">⇩</a>Название<a href="{{route('index.sort',['b_name','asc'])}}">⇧</a></th>

      <th class="table-primary"><a href="">⇩</a>Автор<a href="">⇧</a></th>

      <th class="table-primary"><a href="">⇩</a>Жанр<a href="">⇧</a></th>
      <th class="table-primary"><a href="">⇩</a>Цена<a href="">⇧</a> </th>
      <th class="table-primary"><a href="">⇩</a>Cтр<a href="">⇧</a></th>
      <th class="table-primary">Slug</th>
      <th class="table-primary">Язык</th>
      <th class="table-primary">Автор жив?</th>

    </thead>
    <tbody>
      @forelse($books as $book)
      <tr>
        <td class="table-warning"><a href="{{route('front.book', $book->b_slug)}}">{{$book->b_name}}</a></td>
        
        <td class="table-warning">{{$book->authors[0]->a_name}}</td>
       
        
        <td class="table-warning">{{$book->genres[0]->g_name}}</td>
        
        <td class="table-warning">{{$book->price}}</td>
        <td class="table-warning">{{$book->pages}}</td>
        <td class="table-warning">{{$book->b_slug}}</td>
        <td class="table-warning">{{$book->language}}</td>
        <td class="table-warning">{{$book->status}}</td>
      </tr>

      @empty
      <tr>
        <td colspan="10" class="text-center"><h3>Книги отсутствуют</h3></td>
      </tr>
      @endforelse


    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">
              {{$books->links()}}
          </ul>
        </td>
      </tr>

    </tfoot>

  </table>

    </div>