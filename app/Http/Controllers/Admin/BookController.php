<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BookRequest;
use App\Models\Admin\Author;
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
        //dd($books->authors);
       // $roles=Book::find(7)->authors()->orderBy('name')->get();
        //dd($roles);
        return view('admin.book.index',compact('books'));
    }
    public function create(){
        $authors=Author::all();
        $editorial=Editorial::all();
        return view('admin.book.create',compact('editorial','authors'));
    }
    public function store(BookRequest $request){
        $book= Book::create($request->all());
       // dd($book);
    //authors()->where('active', 1)->get();
        //dd($request->authors);
      //  dd(Book::with('authors')->get());
      //$book->authors()->sync($request->input('author_id',[]));

    
      
     // $book->authors()->attach([5,6,7]);
     $book->authors()->attach($request->input('author_id',[]));
       // $book->authors()->attach($request->authors);
        
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

        /*
         if($request->tags){
           en caso de no funcionar el request->tags utilizar --> $request->input('author_id',[])
            Post::find($id)->tags()->sync($request->tags);
           
        }
        **/


        return redirect()->route('books.index')->with('update','Se actualizo el registro');
    }
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index')->with('destroy','Se elimino correctamente');
    }
}
