<!DOCTYPE html>
<html>
<head>
	<title> {{ $book['title'] }} </title>
</head>
<body>

	<div class="container">
		<form action="{{ route('updatebook') }}" method="POST">
			@csrf
			<input type="hidden" name="id" value="{{ $book->id }}">
			<input type="text" class="form-control" name="author_name" placeholder="author" value="{{ $book['author_name'] }}">
			<textarea name="description" class="form-control" placeholder="description">{{ $book['description'] }}</textarea>
			<input type="text" class="form-control" name="title" placeholder="title" value="{{ $book['title'] }}">
			<input type="number" class="form-control" name="genre_id" placeholder="genre_id" value="{{ $book['genre_id'] }}">
			<input type="text" class="form-control" name="image" placeholder="image" value="{{ $book['image'] }}">
			<button class="btn btn-primary">save</button>
		</form>
	</div>

</body>
</html>