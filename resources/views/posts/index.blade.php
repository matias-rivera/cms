@extends('layouts.app')



@section('header_title')
<h1> <i class="fa fa-sticky-note-o"></i> Posts </h1>
@endsection

@section('content')

<div class="d-flex justify-content-end mb-2"> 
    <a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Posts</div>

    <div class="card-body">

        @if ($posts->count()>0)
        <table class="table">

            <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th></th>
                <th></th>
            </thead>

            <tbody>

                @foreach ($posts as $post)
                <tr>
                    <td><img src="{{asset("storage/$post->image")}}" alt="" width="120" height="60"></td>
                    <td>{{$post->title}}</td>

                    <td>
                        <a href="{{route('categories.edit',$post->category->id)}}">
                            {{$post->category->name}}
                        </a>
                    </td>

                    <td>
                        @if ($post->trashed())
                        <form action="{{route('restore-posts',$post->id)}}" method="POST">

                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-sm btn-info">Restore</button>

                        </form>

                        @else
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-info">Edit</a>
                        @endif
                    </td>

                    <td>
                        <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                {{$post->trashed() ? 'Delete' : 'Trash'}}
                            </button>
                        </form>
                    </td>
                </tr>



                @endforeach

               

            </tbody>

            
        </table>
        {{$posts->links()}}
        
        @else
            <h3 class="text-center">No Posts found</h3>
        @endif


    </div>

</div>

@endsection