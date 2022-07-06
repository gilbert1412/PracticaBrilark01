<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;
use App\Models\Admin\Book;
use App\Models\Admin\Editorial;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index(){
        $books=Book::all();
        return view('admin.book.index',compact('books'));
    }
    public function create(){
        $editorial=Editorial::all();
        return view('admin.book.create',compact('editorial'));
    }
    public function store(BookRequest $request){
        Book::create($request->all());
        return redirect()->route('books.index')->with('success','Libro agregado correctamente');
    }
    public function edit(Book $book){
        $editorials=Editorial::all();
        return view('admin.book.edit',compact('book','editorials'));
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
