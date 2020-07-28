<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Tag;
use App\Post;

class WelcomeController extends Controller
{
    public function index(){
        
        $search = request()->query('search');
        if($search){
            $postsSearched = Post::where('title','LIKE',"%{$search}%");
            return view('blog.search')
            ->with('postsSearched',$postsSearched->orderBy('id', 'DESC')->paginate(5))
            ->with('posts',Post::all())
            ->with('categories',Category::all())
            ->with('tags',Tag::all());
        }

        return view('welcome')
        ->with('categories',Category::all())
        ->with('tags',Tag::all())
        ->with('posts',Post::searched()->orderBy('id', 'DESC')->get());

    }
}
