<!DOCTYPE html>
<html>
<head>
    <title>Book Lit</title>
</head>
<body>
    <h1>Create</h1>
    <form method="post" action="{{route('books.store')}}">
        @csrf
        @method('POST')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Pancho">
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Villa">
        <button type="submit">Add Book</button>
    <ul id="book-list">
      
</body>
</html>