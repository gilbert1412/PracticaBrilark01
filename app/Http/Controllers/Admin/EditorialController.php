<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditorialRequest;
use App\Models\Admin\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function index(){
        $books=Editorial::all();
        return view('admin.editorial.index',compact('books'));
    }
    public function create(){
        return view('admin.editorial.create');
    }
    public function store(EditorialRequest $request){
        Editorial::create($request->all());
        return redirect()->route('editorial.index')->with('success','Editorial Regitrado correctamente');
    }
    public function edit(Editorial $editorial){
        return view('admin.editorial.edit',compact('book'));
    }
    public function update(EditorialRequest $request,Editorial $editorial){
        //dd($request->all());
        $editorial=editorial::findOrfail($editorial->id);
        $editorial->update($request->all()); 
        return redirect()->route('editorial.index')->with('update','Se actualizo el registro');
    }
    public function destroy(Editorial $editorial){
        $editorial->delete();
        return redirect()->route('editorial.index')->with('destroy','Se elimino correctamente');
    }
}
