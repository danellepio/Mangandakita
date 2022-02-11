@if ($message = Session::get('success'))
<div class="row justify-content-md-center">
	<div class="col-md-auto">
		<div class="alert alert-success danger-block">
			<strong> {{ $message }} </strong>
		</div>
	</div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="row justify-content-md-center">
	<div class="col-md-auto">
		<div class="alert alert-danger alert-block">
			<strong>{{ $message }}</strong>
		</div>
	</div>
</div>
@endif