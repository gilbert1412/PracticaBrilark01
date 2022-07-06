<?php

namespace App\Http\Controllers;

use App\Models\Admin\Book;
use App\Models\Admin\Editorial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countBook=Book::where('status','=','1')->count();
        $countEditorial=Editorial::where('status','=','1')->count();
        return view('home',compact('countBook','countEditorial'));
    }
}
