<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class PostsController extends Controller
{
    public function show(Post $post){
        $post->increment('visits');
        $post->category()->increment('visits');
        $post->tags()->increment('visits');
        return view('blog.show')->with('post',$post)
        ->with('categories',Category::all())
        ->with('tags',Tag::all())
        ->with('posts',Post::all());
    }

    public function category(Category $category){

 
        return view('blog.category')
        ->with('category',$category)
        ->with('postsSearched',$category->posts()->searched()->orderBy('id', 'DESC')->paginate(10))
        ->with('posts',Post::all())
        ->with('categories',Category::all())
        ->with('tags',Tag::all());
        
    }

    public function tag(Tag $tag){

        return view('blog.tag')
        ->with('tag',$tag)
        ->with('postsSearched',$tag->posts()->searched()->orderBy('id', 'DESC')->paginate(10))
        ->with('posts',Post::all())
        ->with('categories',Category::all())
        ->with('tags',Tag::all());
    }

}



