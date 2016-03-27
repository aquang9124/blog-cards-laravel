@extends("layouts.master")

@section("content")
	<div class="container">
		<div class="row">			
			<h1>{{ $card->title }}</h1>
			<ul class="list-group">
				@foreach ($card->notes as $note)
				<li class="list-group-item">
					<a href="/notes/{{ $note->id }}/edit/{{ $card->id }}" class="edit-notes">{{ $note->body }}</a>
					<a href="#" class="align-right">{{ $note->user->username }}</a>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="row">
			<hr>
			<h2>Add a new note</h2>
			<form action="/cards/{{ $card->id }}/notes" method="post">
				{!! csrf_field() !!}
				<div class="form-group">
					<textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Add Note</button>
				</div>
			</form>
		</div>
		<div class="row">
			<hr>
			<h2>Wanna see all the cards?</h2>
			<form action="/cards">
				<button class="btn btn-default">All Cards</button>
			</form>
		</div>
		<div class="row">
			<hr>
			<h2>Wanna see all of the notes?</h2>
			<form action="/notes/{{ $card->id }}">
				<button class="btn btn-default">All Notes</button>
			</form>
		</div>
	</div>
@endsection