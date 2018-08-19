<label for="">Наименование</label>
<input type="text" class="form-control" name="g_name" placeholder="Название жанра" value="{{$genre->g_name or ""}}" requared>

<label for="">Slug</label>
<input type="text" class="form-control" name="g_slug" placeholder="Автоматическая генерация" value="{{$genre->g_slug or ""}}" readonly>

<hr>
<input class="btn btn-dark" type="submit" value="Сохранить">
