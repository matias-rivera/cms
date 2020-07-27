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
        
      {{--   <header class="masthead">
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
        </header> --}}


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
  

    <div class="container bg-light">
   {{--  @forelse ($posts as $post) --}}
      @if ($posts->count() > 3)
              
      <!-- Main Post Row -->
      <div class=" row">
        <!-- Main Post Column -->
          <div class="col-md-8">  
            <!-- Main Post -->
            <div class="bg-light  px-3 mt-2"> 
                <a href="{{route('blog.show',$posts[0]->id)}}"><h2 class="pt-2">{{$posts[0]->title}}</h2></a>
                <p class="">{{$posts[0]->description}}</p>
                <a href="{{route('blog.show',$posts[0]->id)}}">
                <img  class="img-responsive pb-3 " src="{{asset("storage/".$posts[0]->image)}}" style="width:100%" alt="Card image cap">
                </a>  
            </div>
          </div>
        <!-- Second Post Column -->
          <div class="col-md-4">  
            <!-- Second Post -->
            <div class="bg-light mt-2 px-3"> 
              <a href="{{route('blog.show',$posts[1]->id)}}"><h6 class="pt-2">{{$posts[1]->title}}</h6></a>
              <a href="{{route('blog.show',$posts[1]->id)}}">
              <img  class="img-responsive pb-3 " src="{{asset("storage/".$posts[1]->image)}}" style="width:100%; max-height:150px" alt="Card image cap">
              </a>  
            </div>
            <!-- Third Post -->
            <div class="bg-light mt-2 px-3"> 
              <a href="{{route('blog.show',$posts[2]->id)}}"><h6 class="pt-2">{{$posts[2]->title}}</h6></a>
              <a href="{{route('blog.show',$posts[2]->id)}}">
              <img  class="img-responsive pb-3 " src="{{asset("storage/".$posts[2]->image)}}" style="width:100%; max-height:180px" alt="Card image cap">
              </a>  
            </div>
          </div>
      </div>
      <!-- / Main Post Row -->
      @php
      $index = 2;
      $limit = 5;
      $class = "col-md-4";
      $four_row = false; 
      @endphp
        
      <!-- Post Row -->
      @for ($j = 0; $j < 7; $j++)

      @if ($limit > $posts->count())
          @break
      @endif
      
      
      <hr class="my-1">
      <div class="row no-gutters">
          @for ($i = $index; $i < $limit; $i++)
                <!-- Post -->
            <div class= "{{$class}}"> 
              <div class="bg-light mx-1 mt-1">
              <a href="{{route('blog.show',$posts[$i]->id)}}"><h6 class="px-1">{{$posts[$i]->title}}</h6></a>
              <a href="{{route('blog.show',$posts[$i]->id)}}">
              <img  class="img-responsive px-1 pb-1" src="{{asset("storage/".$posts[$i]->image)}}" style="width:100%; max-height:150px" alt="Card image cap">
              </a> 
              </div> 
            </div>

            @if ($i == $limit - 1)
                
                  @php
                      
                      $index = $limit;
                      if($four_row == false){
                        $four_row = true;
                        $limit = $limit + 4;
                        $class = "col-md-3";
                      }
                      else{
                        $four_row = false;
                        $limit = $limit + 3;
                        $class = "col-md-4";
                      }

                  @endphp
              @break
            @endif
            
          @endfor
         
      </div>

      @endfor


      
    @endif
{{--     @empty
            <p class="text-center">
            No result found for query <strong>{{request()->query('search')}}</strong>
            </p>
            
    @endforelse --}}
   {{--  {{$posts->appends(['search' => request()->query('search')])->links()}} --}}
    </div>

    
@endsection



{{-- <div class="card-footer text-muted">
  Posted on January 1, 2020 by
  <a href="#">Start Bootstrap</a>
  {{$post->category->name}}
  -
  @foreach ($post->tags as $tag)
  <a class="badge badge-pill badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
@endforeach --}}



{{-- 
             --}}


            {{--         @include('partials.sidebar')
 --}}        <!-- Sidebar Widgets Column -->