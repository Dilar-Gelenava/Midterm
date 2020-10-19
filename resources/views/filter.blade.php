<!DOCTYPE html>
<html>
<head>
	<title> filter </title>
</head>
<body>
	<div style="margin-left: 50%; transform: translate(-50%); border: 2px solid black;" class="container">
	<form>
		<input type="number" name="genre_id" action="{{ route('filteredbooks') }}" method="POST">
		<button class="btn btn-primary">filter</button>
	</form>

	<h1> Books </h1>
	@if(isset($books))
		@foreach ($books as $book)
				<div style="border: 2px solid black;">
					<h3>{{ $book['title'] }}</h3>
					<h6>{{ $book['author_name'] }}</h6>
					<h6>{{ $book['genre_id'] }}</h6>
					<img src="{{ $book['image'] }}" height="200px">
					<p>{{ $book['description'] }}</p>

					<form action="{{ route('deletebook') }}" method="POST">
	                            @csrf
	                            <input type="hidden" name="id" value="{{ $book->id }}">
	                            <button class="btn btn-danger">
	                                წაშლა
	                            </button>
	                        </form>
	                        <a href="{{ route('editbook',["id"=>$book->id ]) }}" class="btn btn-warning">
	                            განახლება
	                        </a>
	                        <a href="{{ route('showbook',["id"=>$book->id ]) }}" class="btn btn-success">
	                            დათვალიერება
	                        </a>
	                        <p>{{ $book->created_at->diffForHumans() }}</p>
			</div>
			@endforeach
		@endif
	</div>

</body>
</html>