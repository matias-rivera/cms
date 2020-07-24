@extends('layouts.blog')


@section('title')
    Tag {{$tag->name}}
@endsection

@section('header')


        <header class="masthead">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-center">
                <h1 class="font-weight-light">{{$tag->name}}</h1>
                <p class="lead"></p>
              </div>
            </div>
          </div>
        </header>
    
    
@endsection


@section('content')
    
    <div class="container">

      <div class="row">
  
        <!-- Blog Entries Column -->
        <div class="col-md-8">
  
          <h1 class="my-4">{{$tag->name}}
            <small>Últimos posts</small>
          </h1>
  
  
  
            @forelse ($posts as $post)
            <!-- Blog Post -->
            <div class="card mb-4">
    
              <a href="{{route('blog.show',$post->id)}}">
                <img class="card-img-top" src="{{asset("storage/".$post->image)}}" alt="Card image cap">
              </a>
              <div class="card-body">
                <a href="{{route('blog.show',$post->id)}}">
                <h2 class="card-title">{{$post->title}}</h2>
                </a>
                <p class="card-text">{{$post->description}}</p>
              </div>
              <div class="card-footer text-muted">
                {{-- Posted on January 1, 2020 by
                <a href="#">Start Bootstrap</a> --}}
                {{$post->category->name}}
                -
                @foreach ($post->tags as $tag)
                    <a class="badge badge-pill badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
                  @endforeach
              </div>
            </div>
  
            @empty
            <p class="text-center">
            No result found for query <strong>{{request()->query('search')}}</strong>
            </p>
            
            @endforelse
  
          {{$posts->appends(['search' => request()->query('search')])->links()}}
            </div>
         
  
        
        @include('partials.sidebar')
        <!-- Sidebar Widgets Column -->
        
      </div>
      </div>
      <!-- /.row -->
  
    </div>
    
@endsection
