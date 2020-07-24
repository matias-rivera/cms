@extends('layouts.app')


@section('css')
    <style>
        .index-button a,a:hover {
            color:#000000;
            text-decoration: none;
        }
    </style>
@endsection

@section('header_title')
<h1> <i class="fa fa-gear"></i> Dashboard </h1>
@endsection
@section('content')

    
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body row">
                   {{--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    --}}


    
                                <div class="col-md-3 mb-2 index-button">
                                    <a href="{{route('users.index')}}">
                                        <div class="card card-body bg-light">
                                            <h2 class="text-center"><i class="fa fa-group mr-2"></i>{{$users->count()}} </h2>
                                            <h4 class="text-center">Users</h4>
                                       </div>

                                     </a>
                                </div>
                                <div class="col-md-3 mb-2 index-button">
                                    <a href="{{route('posts.index')}}">
                                        <div class="card card-body bg-light">
                                            <h2 class="text-center"><i class="fa fa-sticky-note-o mr-2"></i>{{$posts->count()}} </h2>
                                            <h4 class="text-center">Posts</h4>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mb-2 index-button">
                                    <a href="{{route('tags.index')}}">
                                        <div class="card card-body bg-light">
                                            <h2 class="text-center"><i class="fa fa-hashtag mr-2"></i>{{$tags->count()}} </h2>
                                            <h4 class="text-center">Tags</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 mb-2 index-button">
                                    <a href="{{route('categories.index')}}">
                                        <div class="card card-body bg-light">
                                            <h2 class="text-center"><i class="fa fa-book mr-2"></i>{{$categories->count()}} </h2>
                                            <h4 class="text-center">Categories</h4>
                                        </div>
                                    </a>
                                </div>



                    <!-- -->
                    
                </div>
            </div>

@endsection
