<!-- Пошуковий фільтр -->
<div class="col-sm-12 col-md-12 col-lg-2">
    <div class="card-footer text-white bg-dark">
      <h4>Поиск</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form class="form" action="{{route('index.searchFilter')}}" method="get">
{{ csrf_field() }}

<!-- Підлючаємо форму -->
@include('front.searchFilter.form')

</form>
</div>
