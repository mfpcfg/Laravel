<!-- Виводить повідомлення нашої бібліотеки Zttp -->
@if(session()->has('flash_message'))
	<div class="alert" style="text-align:center;">
		{{ session('flash_message') }}
	</div>
@endif
