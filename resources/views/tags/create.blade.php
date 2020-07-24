@extends('layouts.app')

@section('header_title')
<h1> <i class="fa fa-hashtag"></i> Tags </h1>
@endsection

@section('content')


    <div class="card card-default">
    
        <div class="card-header">
            {{isset($tag) ? 'Edit tag' : 'Create tag'}}
        </div>

        <div class="card-body">

            @include('partials.errors')
        
        <form action="{{isset($tag) ? route('tags.update',$tag->id) : route('tags.store')}}" method="POST">


            @csrf
            @if (isset($tag))
                @method('PUT')
            @endif
            <div class="form-group">
            
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{isset($tag) ? $tag->name : ''}}">

            </div>

            <div class="form-group">
            
                <button class="btn main-color-bg">{{isset($tag) ? 'Update tag' : 'Create tag'}}</button>

            </div>
        
        </form>
        
        </div>


    </div>


@endsection