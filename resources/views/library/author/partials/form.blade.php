<label for="">Наименование</label>
<input type="text" class="form-control" name="name" placeholder="Кто автор" value="{{$a->name or ""}}" requared>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$a->slug or ""}}" readonly>

<label for="">Автор жив?</label>
<select class="form-control" name="alive">
  <option value="0">Жив</option>
  <option value="1">Умер</option>
</select>

<hr>

<input class="btn btn-dark" type="submit" value="Сохранить">

