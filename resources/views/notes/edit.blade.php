@extends('layouts.master')

<div class="container">
@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Edit the note</h1>
			<form action="/notes/{{ $note->id }}" method="post">
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" class="form-control" rows="10">{{ $note->body }}</textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Edit Note</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<hr>
			<form action="/cards/{{ $card->id }}">
				<div class="form-group">
					<button class="btn btn-default">Go Back</button>
				</div>
			</form>
		</div>
	</div>
@endsection
</div>