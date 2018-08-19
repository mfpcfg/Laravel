<label for="">Наименование</label>
<input type="text" class="form-control" name="b_name" placeholder="Название книги" value="{{$book->b_name or ""}}" requared>

<label for="">Автор</label>
<select class="form-control" name="authors">
   @foreach($authors as $author)

  <option value="{{$author->id}}">{{$author->a_name}}</option>
    
  @endforeach
</select>

<label for="">Жанр</label>
<select class="form-control" name="genres">
  @foreach($genres as $genre)
  <option value="{{$genre->id}}">{{$genre->g_name}}</option>
  @endforeach
</select>

<label for="">Цена</label>
<input type="text" class="form-control" name="price" placeholder="Цена" value="{{$book->price or ""}}" requared>

<label for="">Кол стр</label>
<input type="text" class="form-control" name="pages" placeholder="Количество страниц" value="{{$book->pages or ""}}" requared>

<label for="">Slug</label>
<input type="text" class="form-control" name="b_slug" placeholder="Автоматическая генерация" value="{{$book->b_slug or ""}}" readonly>

<label>Язык</label>
<select class="form-control" name="language">
 <option value="UKR">UKR</option>
 <option value="RUS">RUS</option>
 <option value="US">US</option>
</select>

<label for="">Статус книги?</label>
<select class="form-control" name="status">
  <option value="0">Есть в наличие</option>
  <option value="1">Нет в наличие</option>
</select>

<hr>

<input class="btn btn-dark" type="submit" value="Сохранить">
