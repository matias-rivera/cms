


  <div class="col-md-4">
  
    <!-- Search Widget -->
    {{-- <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Search</h5>
      <div class="card-body">
    
        
          <form class="input-group" action="" method="GET">
            <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
            <div class="input-group-addon">
              <button type="submit" class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
            </div>
          </form>
     
      </div>
    </div> --}}

    

    <!-- Side Tags -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Tops Posts</h5>
      <div class="card-body">
        <ul class="list-group">
          @for ($i = 0; $i < min(5,$posts->count()); $i++)
            <a href="{{route('blog.show',$posts[$i]->id)}}">
              <li class="list-group-item text-dark">
                <img class="img-fluid rounded text-center" style=""  src="{{asset("storage/".$posts[$i]->image)}}" alt="" >
                <div class="mt-2">
                  {{$i+1}} - {{$posts[$i]->title}}
                </div>
              </li>
            </a>
          @endfor
        </ul>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Top Categories</h5>
      <div class="card-body">

        @if ($categories->count() <= 4)
          <ul class="list-group">
          @foreach ($categories as $category)
          <a href="{{route('blog.category',$category->id)}}" class="text-secondary">
            <li class="list-group-item">{{$category->name}}</li>
          </a>
          @endforeach
          </ul>
        @else
        <div class="row">
          <div class="col-md-6">
            @for ($i = 0; $i < 4; $i++)
              <ul class="list-group">
                <a href="{{route('blog.category',$categories[$i]->id)}}" class="text-secondary">
                  <li class="list-group-item">{{$categories[$i]->name}}</li>
                </a>
              </ul>
            @endfor
          </div>
          <div class="col-md-6">
            @for ($i = 4; $i < min(8,$categories->count()); $i++)
              <ul class="list-group">
                <a href="{{route('blog.category',$categories[$i]->id)}}" class="text-secondary">
                  <li class="list-group-item">{{$categories[$i]->name}}</li>
                </a>
              </ul>
            @endfor
          </div>
        </div>
        
        @endif

        
          

        

        

      </div>
    </div>

    <!-- Side Tags -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Tops Tags</h5>
      <div class="card-body">
        @foreach ($tags as $tag)
        <a class="badge badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
        @endforeach
      </div>
    </div>

  </div>