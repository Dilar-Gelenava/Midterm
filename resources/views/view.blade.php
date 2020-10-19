<!DOCTYPE html>
<html>
<head>
	<title> {{ $book['title'] }} </title>
	<style type="text/css">
		table,td,tr,th{
			border:2px solid black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<table>
		<tr>
			<th>title</th>
			<th>author_name</th>
			<th>genre_id</th>
		</tr>
			<tr>
				<td>{{ $book['title']}}</td>
				<td>author_name</td>
				<td>{{ $book['genre_id']}}</td>
			</tr>
	</table>
	<p>{{ $book['description'] }}</p>
	<img src="{{ $book['image'] }}" height="600px">

</body>
</html>