

@php
    $categories_class ="";
@endphp


<header class="container">
    <div class="">
     
        

        <ul class="list-inline">

            @for ($i = 0; $i < min(14,$categories->count()); $i++)
            
            <li class="list-inline-item"><a class="" href="{{route('blog.category',$categories[$i]->id)}}">{{$categories[$i]->name}}</a></li>
            @endfor

        </ul>
       

        <ul class="list-group list-group-horizontal">
            
            @for ($i = 0; $i < min(10,$categories->count()); $i++)
            @php
            if($i == 3)
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
                    <li class="list-group-item flex-fill {{$categories_class}}"><a class="" href="{{route('blog.category',$categories[$i]->id)}}">{{$categories[$i]->name}}</a></li>
                @endif
            @endfor
        </ul>
      
    </div>
</header>