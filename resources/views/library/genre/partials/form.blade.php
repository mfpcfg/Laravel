<label for="">Наименование</label>
<input type="text" class="form-control" name="name" placeholder="Название жанра" value="{{$g->name or ""}}" requared>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$g->slug or ""}}" readonly>

<hr>
<input class="btn btn-dark" type="submit" value="Сохранить">
