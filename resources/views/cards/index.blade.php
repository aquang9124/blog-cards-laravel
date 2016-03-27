@extends("layouts.master")

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>All Cards</h1>
			<ul class="list-group">
				@foreach ($cards as $card)
				<li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection