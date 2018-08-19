@extends('front.layouts.app_front')

@section('title', 'Моя библиотека')

@section('content')

<div class="container">
    <div class="row">


@include('front.filter.filter')


@include('front.tableOfBooks')


@include('front.searchFilter.searchFilter')


    </div>
</div>

@endsection
