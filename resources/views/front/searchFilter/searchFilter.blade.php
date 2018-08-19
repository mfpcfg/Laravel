   <!-- Поиск по фильтру-->
    <div class="col-sm-2">
    <div class="card-footer text-white bg-dark">
    <h4>Поиск</h4>
    </div>
<!-- class="was-validated" клас для зеленой форми -->
<form action="{{route('index.searchFilter')}}">
{{ csrf_field() }}

@include('front.searchFilter.form')

</form>
    </div>