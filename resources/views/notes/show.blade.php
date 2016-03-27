@extends('layouts.master')

<div class="container">
	@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>All Notes</h1>
			<ul class="list-group">
				@foreach ($notes as $note)
				<li class="list-group-item">{{ $note->body }}</li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<hr>
			<h1>Return to where you were</h1>
			<form action="/cards/{{ $card->id }}">
				<div class="form-group">
					<button class="btn btn-default">Go Back</button>
				</div>
			</form>
		</div>
	</div>
	@endsection
</div>