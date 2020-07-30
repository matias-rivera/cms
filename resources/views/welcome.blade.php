@extends('layouts.blog')


@section('css')
    
@endsection

@section('title')
    Blog
@endsection

@section('header')
@endsection




@section('content')
@include('partials.headerbar')
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
    

    <div class="container bg-white border p-0">
   {{--  @forelse ($posts as $post) --}}
    @if ($posts->count()  > 3)
              
      <!-- Main Post Row -->
      <div class="row ">
        <!-- Main Post Column -->
          <div class="col-md-8">  
            <!-- Main Post -->
            <div class="bg-white  px-3 mt-2"> 
                <a href="{{route('blog.show',$posts[0]->id)}}"><h2 class="pt-2 text-dark font-weight-bold">{{$posts[0]->title}}</h2></a>
                <p class="">{{$posts[0]->description}}</p>
                <a href="{{route('blog.show',$posts[0]->id)}}">
                <img  class="img-responsive mb-3 " src="{{asset("storage/".$posts[0]->image)}}" style="width:100%" alt="Card image cap">
                </a>  
            </div>
          </div>
        <!-- Second Post Column -->
          <div class="col-md-4 border-left">  
            <!-- Second Post -->
            <div class="bg-white mt-2 px-3"> 
              <a href="{{route('blog.show',$posts[1]->id)}}"><h6 class="pt-2 text-dark font-weight-bold">{{$posts[1]->title}}</h6></a>
              <a href="{{route('blog.show',$posts[1]->id)}}">
              <img  class="img-responsive pb-3 " src="{{asset("storage/".$posts[1]->image)}}" style="width:100%; max-height:180px" alt="Card image cap">
              </a>  
            </div>
            <!-- Third Post -->
            <div class="bg-white mt-2 px-3"> 
              <a href="{{route('blog.show',$posts[2]->id)}}"><h6 class="pt-2 text-dark font-weight-bold">{{$posts[2]->title}}</h6></a>
              <a href="{{route('blog.show',$posts[2]->id)}}">
              <img  class="img-responsive pb-3 " src="{{asset("storage/".$posts[2]->image)}}" style="width:100%; max-height:180px" alt="Card image cap">
              </a>  
            </div>
          </div>
      </div>
      <!-- / Main Post Row -->
      
    @endif

      @php
        if($posts->count() > 3){
          $index = 3;
          $limit = 6;
          $rows = getPostsRowsNumber($posts->count()-3);
        }
        else{
          $index = 0;
          $limit = 3;
          $rows = 1;
        }
        $class = "col-md-4";
        $four_row = false; 
        
      @endphp

      
      <!-- Post Row -->
      @for ($j = 0; $j < $rows; $j++)
      <hr class="m-0 ">  
        <div class="row no-gutters">
            @for ($i = $index; $i < $limit; $i++)
                  <!-- Post -->
                  
              @if (isset($posts[$i]))
                <div class= "{{$class}} py-2"> 
                  <div class=" mx-1">

                  
                  <div class="bg-white px-2 py-1">
                  <a href="{{route('blog.show',$posts[$i]->id)}}"><h6 class="px-1 text-dark font-weight-bold">{{$posts[$i]->title}}</h6></a>
                  <a href="{{route('blog.show',$posts[$i]->id)}}">
        
                  <img  class="img-responsive px-1 pb-1" src="{{asset("storage/".$posts[$i]->image)}}" style="width:100%; max-height:150px" alt="Card image cap">
                  </a> 
                  </div> 
                </div>
                </div>

              @endif
            @endfor


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
          
        </div>

      @endfor

      @if($posts->count() == 0)
        <p class="text-center">
          No result found for query <strong>{{request()->query('search')}}</strong>
        </p>
      @endif
        

    
{{--     @empty
            
            
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