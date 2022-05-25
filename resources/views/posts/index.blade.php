@extends('layouts.main')

@section('title', 'Posts list')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-2">

                <div class="col-12">
                    <a href="{{route('posts.create')}}" class="btn btn-lg btn-primary">Pubblica un nuovo post</a>
                </div>
                @foreach ($posts as $post)
                <div class="col-6 p-2">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{-- <a href='{{url("/post/$post->id")}}'> --}}
                                        <a href='{{route("posts.show", $post->id)}}'>
                                            {{ $post->title }}
                                        </a>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        {{ $post->author }}
                                    </h6>
                                    <p class="card-text">
                                        {{ substr($post->content, 0, 70) }}
                                    </p>
                                    <td>
                                        <a href="{{route('posts.edit')}}" class="btn btn-success"> edit </a>
                                        <button class="btn btn-danger"> del </button>
                                    </td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                <div class="col-8">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

