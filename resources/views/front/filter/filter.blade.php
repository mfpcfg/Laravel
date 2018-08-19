    <!-- Таблица фильтров -->
    <div class="col-sm-2">
    <div class="card-footer text-white bg-dark">
    <h4>Фильтры</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form class="was-validated" action="{{route('index.filter')}}" method="post">
{{ csrf_field() }}

@include('front.filter.form')

</form>
    </div>