<!DOCTYPE html>
<html>

<head>
  <title>Bo List</title>
</head>

<body>
  <h1>Book List</h1>
  <a href="{{route('books.create')}}">Add a book</a>
  </div>
  @foreach($books as $book)
    <h2>{{ $book->title }} - {{ $book->author }}</h2>
    <a href="{{route('books.edit', ['book' => $book])}}">Edit</a>
    <form method="post" action="{{route('books.destroy', ['book' => $book])}}">
      @csrf
      @method('delete')
      <button type="submit">Delete</button>
  @endforeach
</body>

</html>