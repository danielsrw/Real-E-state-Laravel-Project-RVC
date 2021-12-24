@if ($message = Session::get('success'))
	<div class="alert alert-success mr-0">
	    <strong>{{ $message }}</strong>
		<button type="button" class="btn-close" data-dismiss="alert"></button>
	</div>
@endif


@if ($message = Session::get('error'))
	<div class="alert alert-danger mr-0">
	    <strong>{{ $message }}</strong>
		<button type="button" class="btn-close" data-dismiss="alert"></button>
	</div>
@endif


@if ($message = Session::get('warning'))
	<div class="alert alert-warning mr-0">
	    <strong>{{ $message }}</strong>
		<button type="button" class="btn-close" data-dismiss="alert"></button>
	</div>
@endif


@if ($message = Session::get('info'))
	<div class="alert alert-info mr-0">
	    <strong>{{ $message }}</strong>
		<button type="button" class="btn-close" data-dismiss="alert"></button>
	</div>
@endif


@if ($errors->any())
	<div class="alert alert-danger mr-0">
		Please check the form below for errors
		<button type="button" class="btn-close" data-dismiss="alert"></button>
	</div>
@endif