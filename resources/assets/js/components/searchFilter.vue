<temlate>
<div>



	    <!-- Таблица фильтров -->
    <div class="col-sm-2">
    <div class="card-footer text-white bg-dark">
    <h4>Фильтры</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form class="was-validated" action="{{route('index.filter')}}" method="post">
{{ csrf_field() }}


 <p><b>Цена:</b></p>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="price120" name="price"  value="0_100">
    <label class="custom-control-label" for="price120">до 100</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="price145" name="price" value="100_200">
    <label class="custom-control-label" for="price145">от 100 до 200</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="price95" name="price" value="200_1000">
    <label class="custom-control-label" for="price95">больше 200</label>
  </div>


 <p><b>Страницы:</b></p>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="pages50_150"  name="pages"  value="50_150">
    <label class="custom-control-label" for="pages50_150">от 50 до 150</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="pages150_300"  name="pages"  value="150_300">
    <label class="custom-control-label" for="pages150_300">от 150 до 300</label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="pages300" name="pages"  value="300_1000">
    <label class="custom-control-label" for="pages300">больше 300</label>
  </div>


 <p><b>Язык:</b></p>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="q6" name="language" value="UKR">
    <label class="custom-control-label" for="q6">Укр</label>

  </div>
  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="q7" name="language" value="RUS">
    <label class="custom-control-label" for="q7">Рус</label>

  </div>

  <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="q8" name="language" value="US">
    <label class="custom-control-label" for="q8">Англ</label>
    </div>



<br>


<button class="btn btn-dark" type="submit"> Выбрать <i class="fas fa-check"></i></button>

</form>
    </div>


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
     
      <tr v-for="book in books">
        <td class="table-warning"><a href="{{route('front.book', book.b_slug)}}">{{$book->b_name}}</a></td>
        
        <td class="table-warning">{{book.authors[0].a_name}}</td>
       
        
        <td class="table-warning">{{book.genres[0].g_name}}</td>
        
        <td class="table-warning">{{book.price}}</td>
        <td class="table-warning">{{book.pages}}</td>
        <td class="table-warning">{{book.b_slug}}</td>
        <td class="table-warning">{{book.language}}</td>
        <td class="table-warning">{{book.status}}</td>
      </tr>

    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          <ul class="pagination pull-right">
              {{books.links()}}
          </ul>
        </td>
      </tr>

    </tfoot>

  </table>

    </div>




   <!-- Поиск по фильтру-->
    <div class="col-sm-2">
    <div class="card-footer text-white bg-dark">
    <h4>Поиск</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form action="{{route('index.searchFilter')}}">
{{ csrf_field() }}

<div class="form-group">
	<label for="b_name" class="from-control"><b>Название книги: </b></label>
	<input type="text" name="b_name" class="from-control" value="{{ request()->b_name }}">
</div> 



<div class="form-group">
	<label for="a_name" class="from-control"><b>Автор: </b></label>
	<input type="text" name="a_name" class="from-control" value="{{ request()->a_name }}">
</div>

<div class="form-group">
  <label for="g_name" class="from-control"><b>Жанр: </b></label>
  <input type="text" name="g_name" class="from-control" value="{{ request()->g_name }}">
</div>

<button type="submit" class="btn btn-dark"> Поиск <i class="fas fa-search"></i></button>

</form>
    </div>




</div>
</template>	

<script>

	export default {

	data(){
		return{
		books: [],
		}
	},

	methods: {


	},

	mounted(){
	  console.log('booted');
	}

	}

</script>