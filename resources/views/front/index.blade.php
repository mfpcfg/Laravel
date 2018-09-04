<!-- Сторінка "Библиотека", на якій будемо виводити книги з БД -->

@extends('front.layouts.app_front')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">
    <div class="row">

<!-- Підключаємо фільтр -->
@include('front.filter.filter')

<!-- Підключаємо таблицю з книгами і сортуванням -->
@include('front.tableOfBooks')

<!-- Підключаємо пошуковий фільтр -->
@include('front.searchFilter.searchFilter')


    </div>
</div>

@endsection
