
@extends('layouts.main')

@section('title', 'Post detail')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4 text-center">
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{ $post->title }}
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $post->author }}
                    </h6>
                </div>
                <div class="col-12 m-3">
                    
                </div>
                <div class="col-12 m-3">
                    <p class="card-text text-start">
                        {{ $post->content}}
                    </p>
                </div>
                <div class="col-6">
                    <a href="{{route("posts.show", $post->id - 1)}}">
                        <button class="btn btn-success">Previous</button>
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route("posts.show", $post->id + 1)}}">
                        <button class="btn btn-success">Next</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection