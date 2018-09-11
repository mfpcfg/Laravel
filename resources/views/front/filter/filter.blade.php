    <!-- Таблиця фільтрів -->
<div class="col-sm-12 col-md-12 col-lg-2">
    <div class="card-footer text-white bg-dark">
      <h4>Фильтры</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form class="was-validated" action="{{route('index.filter')}}" method="get">
{{ csrf_field() }}

<!-- Підключаємо форму -->
@include('front.filter.form')

</form>
<br>
</div>
