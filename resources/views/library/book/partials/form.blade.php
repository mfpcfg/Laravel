<label for="">Наименование</label>
<input type="text" class="form-control" name="name" placeholder="Название книги" value="{{$b->name or ""}}" requared>

<label for="">Цена</label>
<input type="text" class="form-control" name="price" placeholder="Цена" value="{{$b->price or ""}}" requared>

<label for="">Кол стр</label>
<input type="text" class="form-control" name="pages" placeholder="Количество страниц" value="{{$b->pages or ""}}" requared>

<label for="">Размер</label>
<input type="text" class="form-control" name="size" placeholder="Размер" value="{{$b->size or ""}}" requared>

<label for="">Язык</label>
<input type="text" class="form-control" name="language" placeholder="Язык" value="{{$b->language or ""}}" requared>

<label for="">Автор жив?</label>
<select class="form-control" name="status">
  <option value="0">Жив</option>
  <option value="1">Умер</option>
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">
