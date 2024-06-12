<!DOCTYPE html>
<html>
<head>
    <title>Bookk List</title>
</head>
<body>
    <h1>Create</h1>
        <div>
          <ul> 
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    <form method="post" action="{{route('books.update', ['book' => $book])}}">
        @csrf
        @method('put')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Pancho" value="{{$book->title}}">
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Villa" value="{{$book->author}}">
        <input type="submit" value="Update"/>
    <ul id="book-list">
      
</body>
</html>