

@php
    $categories_class ="";
@endphp


<header class="container">
    <div class="">
     
        

   
       
        {{-- Categories bar --}}
        <ul class="list-group list-group-horizontal">
            
            @for ($i = 0; $i < min(8,$categories->count()); $i++)
            @php
            if($i == 2)
                $categories_class = "d-none d-sm-block d-lg-block d-xl-block d-md-block";
            if($i > 3)
                $categories_class = "d-none  d-sm-none d-lg-block d-xl-block d-md-block";
            /* if($i == 5)
                $categories_class = "d-none  d-md-block d-lg-block d-xl-block"; */
            if($i > 5)
                $categories_class = "d-none  d-lg-block d-xl-block";
            if($i > 7)
                $categories_class = "d-none  d-xl-block";
            @endphp
           
                @if (isset($categories[$i]))
                <a class="text-dark flex-fill {{$categories_class}}" href="{{route('blog.category',$categories[$i]->id)}}"><li class="list-group-item text-center  ">{{$categories[$i]->name}}</li></a>
                @endif
            @endfor
        </ul>
      
    </div>

    <hr>
</header>