<!DOCTYPE html>
<html>
<head>
	<title> home </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 50px;">

		<a href="filter/book"> Filter Books </a>

		<form action="{{ route('storebook') }}" method="POST">
			@csrf
			<input type="text" class="form-control" name="author_name" placeholder="author">
			<textarea name="description" class="form-control" placeholder="description"></textarea>
			<input type="text" class="form-control" name="title" placeholder="title">
			<input type="number" class="form-control" name="genre_id" placeholder="genre_id">
			<input type="text" class="form-control" name="image" placeholder="image">
			<button class="btn btn-primary">add</button>
		</form>
	</div>

	<div style="margin-left: 50%; transform: translate(-50%);" class="container">
		@foreach ($books as $book)
			<div style="margin-left: 50%; transform: translate(-50%); border: 2px solid black;">
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
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>
