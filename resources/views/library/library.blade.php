@extends('library.layouts.app_library')

@section('title', 'Моя библиотека')

@section('content')
  
  <h2 class="text-center">Управление библиотекой</h2>
  
  <div class="container">
  		<div class="row">
  			<div class="col-sm-4">
  				<div class="card text-white bg-dark mb-3">
  					<div class="card-header">Наши книги</div>
  				  <div class="card-body">
  					<h4 class="card-title"> Книги <span class="badge badge-secondary badge-pill"> {{$count_books}} </span></h4>
  					<a class="btn btn-outline-secondary" href="{{route('book.create')}}">Создать книгу</a>
  					<a class="btn btn-outline-secondary" href="{{route('book.store')}}">Добавленные книги</a>
  				  </div>
  			</div>
  			</div>
  			<div class="col-sm-4">
  				<div class="card text-white bg-dark mb-3">
  					<div class="card-header">Наши авторы</div>
  				  <div class="card-body">
  					<h4 class="card-title"> Авторов <span class="badge badge-secondary badge-pill"> {{$count_authors}} </span></h4>
  					<a class="btn btn-outline-secondary" href="{{route('author.create')}}">Создать автора</a>
  					<a class="btn btn-outline-secondary" href="{{route('author.store')}}">Добавленные авторы</a>
  				  </div>
  			</div>
  			</div>
  			<div class="col-sm-4">
  				<div class="card text-white bg-dark mb-3">
  					<div class="card-header">Наши жанры</div>
  				  <div class="card-body">
  					<h4 class="card-title"> Жанров <span class="badge badge-secondary badge-pill"> {{$count_genres}} </span></h4>
  					<a class="btn btn-outline-secondary" href="{{route('genre.create')}}">Создать жанр</a>
  					<a class="btn btn-outline-secondary" href="{{route('genre.store')}}">Добавленные жанры</a>
  				  </div>
  			</div>
  			</div>
  			
  			
  		</div>
  </div>
@endsection
