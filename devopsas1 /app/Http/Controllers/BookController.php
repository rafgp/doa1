<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $newBook = Book::create($data);

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Book $book, Request $request)
    {
      $data = $request->validate([
          'title' => 'required',
          'author' => 'required',
      ]);

        $book->update($data);

        return redirect(route('books.index'))->with('success', 'Book Updated!');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect(route('books.index'))->with('success', 'Book Deleted!');
    }

}
