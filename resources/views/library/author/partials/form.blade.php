<label for="">Наименование</label>
<input type="text" class="form-control" name="a_name" placeholder="Кто автор" value="{{$author->a_name or ""}}" requared>

<label for="">Slug</label>
<input type="text" class="form-control" name="a_slug" placeholder="Автоматическая генерация" value="{{$author->a_slug or ""}}" readonly>

<label for="">Автор жив?</label>
<select class="form-control" name="alive">
  <option value="0">Жив</option>
  <option value="1">Умер</option>
</select>

<hr>

<input class="btn btn-dark" type="submit" value="Сохранить">

