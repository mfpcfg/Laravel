<!-- Форма пошукового фільтру -->
<div class="form-group">
	<label for="b_name" class="from-control"><b>Название книги: </b></label><br>
	<input type="text" name="b_name" class="from-control" id="b_name" value="{{ request()->b_name }}">
</div>

<div class="form-group">
	<label for="a_name" class="from-control"><b>Автор: </b></label><br>
	<input type="text" name="a_name" class="from-control" id="a_name" value="{{ request()->a_name }}">
</div>

<div class="form-group">
  <label for="g_name" class="from-control"><b>Жанр: </b></label><br>
  <input type="text" name="g_name" class="from-control" id="g_name" value="{{ request()->g_name }}">
</div>

<button type="submit" class="btn btn-dark"> Поиск <i class="fas fa-search"></i></button>
