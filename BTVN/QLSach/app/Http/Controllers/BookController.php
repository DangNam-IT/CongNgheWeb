<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //class HomeController extends Controller
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $posts = Book::all();
        return view("home", compact("books"));
    }

}
