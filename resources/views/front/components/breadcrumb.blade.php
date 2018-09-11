<!-- Компоненти, які ми можемо воводити в любомі місці -->

<h2>{{$title}}</h2>
<ol class="breadcrumb bg-dark">
  <li class="breadcrumb-item"><a href="{{route('front.index')}}" class="breadcrumb-link">{{$parent}}</a></li>
  <li class="breadcrumb-item active">{{$active}}</li>
</ol>