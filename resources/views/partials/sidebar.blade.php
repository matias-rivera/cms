


  <div class="col-md-3">
  
    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Search</h5>
      <div class="card-body">
    
        
          <form class="input-group" action="" method="GET">
            <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
            <div class="input-group-addon">
              <button type="submit" class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
            </div>
          </form>
     
      </div>
    </div>

    

    <!-- Side Tags -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">About</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Categories</h5>
      <div class="card-body">
        @foreach ($categories as $category)
        <div class="col-6 "><a href="{{route('blog.category',$category->id)}}" class="text-secondary">{{$category->name}}</a></div>
        @endforeach
        {{-- <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div> --}}
      </div>
    </div>

    <!-- Side Tags -->
    <div class="card my-4">
      <h5 class="card-header bg-secondary text-white">Tags</h5>
      <div class="card-body">
        @foreach ($tags as $tag)
        <a class="badge badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
        @endforeach
      </div>
    </div>

  </div>