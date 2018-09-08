 <!-- Таблицая з книгами -->
    <div class="col-sm-12 col-md-12 col-lg-8">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Книги</h2>
    </div>

  <table class="table table-striped">
    <thead>
      <tr>
      <!--  В шапкі таблиці прописуємо сортування інформації через взаємодію з БД  -->
      <th class="table-primary"><a href="{{route('index.sort',['b_name','desc'])}}">⇩</a>Название<a href="{{route('index.sort',['b_name','asc'])}}">⇧</a></th>
      <th class="table-primary"><a href="{{route('index.sort',['price','desc'])}}">⇩</a>Цена<a href="{{route('index.sort',['price','asc'])}}">⇧</a> </th>
      <th class="table-primary d-none d-sm-block"><a href="{{route('index.sort',['pages','desc'])}}">⇩</a>Кол стр<a href="{{route('index.sort',['pages','asc'])}}">⇧</a></th>
      <th class="table-primary"><a href="{{route('index.sort',['language','desc'])}}">⇩</a>Язык<a href="{{route('index.sort',['language','asc'])}}">⇧</a></th>
       <th class="table-primary"><a href=""></a>Автор<a href=""></a></th>
      <th class="table-primary"><a href=""></a>Жанр<a href=""></a></th>
      </tr>
    </thead>
    <tbody>
      <!-- Виводимо всі книги з БД через перебір масиву -->
      @forelse($books as $book)
      <tr>
        <td class="table-warning"><a href="{{route('front.book', $book->b_slug)}}">{{$book->b_name}}</a></td>
        <td class="table-warning">{{$book->price}}</td>
        <td class="table-warning d-none d-sm-block">{{$book->pages}}</td>
        <td class="table-warning">{{$book->language}}</td>
        <td class="table-warning">{{$book->authors[0]->a_name}}</td>
        <td class="table-warning">{{$book->genres[0]->g_name}}</td>
      </tr>

      @empty
      <!-- Інформація, яку бачить користувач при відстуності книг в БД -->
      <tr>
        <td colspan="10" class="text-center"><h3>Книги отсутствуют</h3></td>
      </tr>
      @endforelse

    </tbody>
    <!-- Через pagіnate розбиваємо наші книги на сторінки -->
    <tfoot>
      <tr>
        <td colspan="6">
          <ul class="pagination pull-right">
              {{$books->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>

  </table>

    </div>
