@extends('front.layouts.app_front')

@section('title', 'Моя библиотека')

@section('content')

   
<div class="container"> 

 @component('front.components.breadcrumb')
    @slot('title') Служба поддержки @endslot
    @slot('parent') Главная @endslot
    @slot('active') Служба поддержки @endslot
  @endcomponent
 
<div class="row">
  <hr>
  
<!-- Таблица с книгами -->    
    <div class="col-sm-12">
    <div class="card-header text-white bg-dark">
        <h2 class="text-center">Обратная связь</h2>
    </div>

<!--      Саме в цьому місці виводимо повідомлення по результати відправлення нашої форми      -->
@include('front.partials.flash')

 <form action="{{route('index.message')}}" method="post">
   {{ csrf_field() }}

<!--      підключаємо файл з нашою формою      -->
  @include('front.callback.form')


 </form>


    </div>
    </div>


    </div>
 
@endsection
