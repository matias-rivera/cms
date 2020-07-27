@extends('layouts.blog')


@section('title')
    Category {{$category->name}}
@endsection

@section('header')
          
        @include('partials.headerBar')
    
@endsection


@section('content')
    <!-- Main Content -->


    <div class="container mt-4">
      <hr>
      <div class="row">
  
        <!-- Blog Entries Column -->
        <div class="col-md-8">
              <h1 class="text-dark">{{$category->name}}</h1>
              <h6 class="text-dark">Last Posts</h6>
          <hr>
  
            @forelse ($postsSearched as $post)
            <!-- Blog Post -->
         
                <div class="row">

                  <div class="col-lg-6">
                    <a href="{{route('blog.show',$post->id)}}">
                      <img class="" style="width:100%; height:100%" src="{{asset("storage/".$post->image)}}" alt="Card image cap">
                    </a>
                  </div>
                  <div class="col-lg-6 ">
                    <a href="{{route('blog.show',$post->id)}}">
                    <h5 class="text-dark">{{$post->title}}</h5>
                    </a>
                    <p class="h6 text-secondary d-none d-sm-block">{{$post->description}}</p>
                  </div>

                </div>

                <hr>
              
              
          
  
            @empty
            <p class="text-center">
            No result found for query <strong>{{request()->query('search')}}</strong>
            </p>
            
            @endforelse
  
            {{$postsSearched->appends(['search' => request()->query('search')])->links()}}
            </div>
         
  
        
        @include('partials.sidebar')
        <!-- Sidebar Widgets Column -->
        
      </div>
      
      <!-- /.row -->
  
    </div>
    

    
@endsection
