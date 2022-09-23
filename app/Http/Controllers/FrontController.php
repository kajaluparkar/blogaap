<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class FrontController extends Controller
{
     public function index()
     {
        $data = Blog::all();
        $latest_blog = Blog::latest()->first();
        $categories = Category::all();
        return view('welcome', compact('data','latest_blog','categories'));


     }
     public function detail($id){
        $data = Blog::find($id);
        $categories = Category::all();

        return view('fronted.detail' , compact('data','categories'));
     }

}
