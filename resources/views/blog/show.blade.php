@extends('layouts.blog')


@section('title')

{{$post->title}}

@endsection


@section('header')

@include('partials.headerbar')


    
@endsection


@section('content')
  <div class="container mt-4 bg-white">
    <hr>
    <a href="{{route('blog.category',$post->category->id)}}"><h5 class="text-info text-uppercase">{{$post->category->name}}</h5></a>
    <h1 class="font-weight-light text-left">{{$post->title}}</h1>
        <p class="lead text-left">By {{$post->description}}</p>
        <hr>
    <div class="row">
      <div class="col-md-8">
        <h5 class="text-secondary">{{date('d-m-Y', strtotime($post->date))}}</h5>

        <!-- Date/Time -->
        {{-- <p>Posted on January 1, 2019 at 12:00 PM</p> --}}
        <img class="img-fluid rounded text-center" style="width:100%; height:100%"  src="{{asset("storage/$post->image")}}" alt="" >
        <div class="text-left">
          {!!$post->content!!}
        </div>

        <div class="card my-4">
          <h5 class="card-header bg-secondary text-white">Related Tags</h5>
          <div class="card-body">
            @foreach ($post->tags as $tag)
             <a class="badge badge-pill badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
            @endforeach
          </div>
        </div>
{{--          --}}

        <div class="card my-4">
          <h5 class="card-header bg-secondary text-white">You may interested</h5>
          <div class="card-body">
            <ul class="list-group list-group-horizontal-md">
              @for ($i = 0; $i < min(3,$posts->count()); $i++)
                <a href="{{route('blog.show',$posts[$i]->id)}}">
                  <li class="list-group-item text-dark">
                    <img class="img-fluid rounded text-center" style="max-height:150px;width:100%"  src="{{asset("storage/".$posts[$i]->image)}}" alt="" >
                    <div class="mt-2">
                      {{$posts[$i]->title}}
                    </div>
                  </li>
                </a>
              @endfor
            </ul>
          </div>
        </div>

        {{-- comments --}}
        <div class="container mb-4">
          <div class="row">
            <div class="col mx-auto">
              <hr>
              <div id="disqus_thread"></div>
              <script>

              var disqus_config = function () {
              this.page.url = "{{config('app.url')}}/blog/posts/{{$post->id}}";  
              this.page.identifier = "{{$post->id}}"; 
              };
              
              (function() { 
              var d = document, s = d.createElement('script');
              s.src = 'https://blog-qgs8asipdl.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
            </div>
          </div>
    
        </div>

      </div>

      

      
        @include('partials.sidebar')
      
    </div>

        
 

    

    <!-- Comments Form -->

    

      

      <!---partials --->
     
      <!-- end row -->
    


  </div>


 




@endsection