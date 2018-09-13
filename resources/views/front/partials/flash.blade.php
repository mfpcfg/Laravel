<!-- Виводить повідомлення нашої бібліотеки Zttp -->
@if(session()->has('flash_message'))
	<div class="alert text-center">
		{{ session('flash_message') }}
	</div>
@endif
