<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;
use App\Models\Admin\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books=Book::all();
        return view('admin.book.index',compact('books'));
    }
    public function create(){
        return view('admin.book.create');
    }
    public function store(BookRequest $request){
        Book::create($request->all());
        return redirect()->route('books.index')->with('success','Libro Regitrado correctamente');
    }
    public function edit(Book $book){
        return view('admin.book.edit',compact('book'));
    }
    public function update(BookRequest $request,Book $book){
        //dd($request->all());
        $book=book::findOrfail($book->id);
        $book->update($request->all()); 
        return redirect()->route('books.index')->with('update','Se actualizo el registro');
    }
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index')->with('destroy','Se elimino correctamente');
    }
}
