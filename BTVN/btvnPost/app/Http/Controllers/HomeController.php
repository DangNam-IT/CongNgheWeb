<?php

namespace App\Http\Controllers;
use App\Models\Post;

class Controller
{
    // 
    
}


class HomeController extends Controller
{
/**
* Display a listing of the resource.
*/
   public function index()
    {
        $posts = Post::all();
        return view(view: "home",data:compact("posts"));
    }
}
