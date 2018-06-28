<label for="">Наименование</label>
<input type="text" class="form-control" name="name" placeholder="Название жанра" value="{{$g->name or ""}}" requared>

<hr>
@include('library.genre.partials.genres')
<input class="btn btn-primary" type="submit" value="Сохранить">
