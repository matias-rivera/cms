@extends('layouts.blog')


@section('css')
    
@endsection

@section('title')
    Blog
@endsection

@section('header')
        <!-- Header -->
    {{--     <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
          <div class="container">
    
            <div class="row">
              <div class="col-md-8 mx-auto">
    
                <h1>Latest Blog Posts</h1>
                <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>
    
              </div>
            </div>
    
          </div>
        </header> --}}
        
        <header class="masthead">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 text-center">
                <h1 class="font-weight-light">
                Informática
                  
                </h1>
                <p class="lead"></p>
              </div>
            </div>
          </div>
        </header>


        <!-- /.header -->
    
    
@endsection


@section('content')
    <!-- Main Content -->
    {{-- <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">

                @forelse ($posts as $post)
                <div class="col-md-6">
                  <div class="card border hover-shadow-6 mb-6 d-block">
                    <a href="{{route('blog.show',$post->id)}}"><img class="card-img-top" src="{{asset("storage/".$post->image)}}" alt="Card image cap"></a>
                    <div class="p-6 text-center">
                      <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->category->name}}</a></p>
                      <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show',$post->id)}}">{{$post->title}}</a></h5>
                    </div>
                  </div>
                </div>
              

               
                    
                @empty
                    <p class="text-center">
                    No result found for query <strong>{{request()->query('search')}}</strong>
                    </p>
                @endforelse
                

              </div>


            
              {{$posts->appends(['search' => request()->query('search')])->links()}}
            </div>



            @include('partials.sidebar')

          </div>
        </div>
      </div>
    </main> --}}

    <div class="container ">

      <div class="row">
  
        <!-- Blog Entries Column -->
        <div class="col-md-8">
  
          <h1 class="my-4">Informática
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
          <!-- Pagination -->
         {{--  <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> --}}
  
         
  
   {{--        <div class="row">
            <!-- latest post -->
            <div class="col-md-6 col-lg-3">
              <div class="card mb-4">
                <img class="card-img-top d-none d-md-block" src="http://placehold.it/100x100" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Post Title</h5>
                  </div>
      
              </div>
            </div>
            <!-- latest post -->
          
            <!-- latest post -->
            <div class="col-md-6 col-lg-3">
              <div class="card mb-4">
                <img class="card-img-top d-none d-md-block" src="http://placehold.it/100x100" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Post Title</h5>
                  </div>
      
              </div>
            </div>
            <!-- latest post -->
  
              <!-- latest post -->
              <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                  <img class="card-img-top d-none d-md-block" src="http://placehold.it/100x100" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Post Title</h5>
                    </div>
        
                </div>
              </div>
              <!-- latest post -->
  
              
                <!-- latest post -->
            <div class="col-md-6 col-lg-3">
              <div class="card mb-4">
                <img class="card-img-top d-none d-md-block" src="http://placehold.it/100x100" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Post Title</h5>
                  </div>
      
              </div>
            </div>
            <!-- latest post -->
  
  
            
  
          </div> --}}
  
        
        @include('partials.sidebar')
        <!-- Sidebar Widgets Column -->
        
      </div>
      </div>
      <!-- /.row -->
  
    </div>

    
@endsection
