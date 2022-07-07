<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function index(){
            $authors=Author::all();
            return view('admin.author.index',compact('authors'));
        }
        public function create(){
            $authors=Author::all();
            
            return view('admin.author.create',compact('authors'));
        }
        public function store(Request $request){
            dd($request->all());
            $author= Author::create($request->all());
            $author->authors()->attach($request->authors);
            
            return redirect()->route('authors.index')->with('success','Libro agregado correctamente');
        }
        public function edit(Author $author){
            
            return view('admin.author.edit',compact('author'));
        }
        public function update(Request $request,Author $author){
            //dd($request->all());
            $author=Author::findOrfail($author->id);
            $author->update($request->all()); 
            return redirect()->route('authors.index')->with('update','Se actualizo el registro');
        }
        public function destroy(Author $author){
            $author->delete();
            return redirect()->route('authors.index')->with('destroy','Se elimino correctamente');
        }
}
