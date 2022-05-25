
@extends('layouts.app')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">
                
            </div>
            <div class="row p-4">

                
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title">
                        <div id="titleHelp" class="form-text">Inserisci un titolo che non potrai dimenticare</div>
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    

                    <div class="mb-3">
                        @foreach ($categories as $category)
                            <input class="form-check-input" type="checkbox"
                            name="category[]" value="{{$category->id}}">
                            <label for="categories" class="badge rounded-pill me-3" style="background-color: {{ $category->color }}">
                                {{$category->name}}
                            </label>
                        @endforeach
                    </div>

                    <div class="mb-3">

                        <label for="content" class="form-label">Inserisci il contenuto del post</label>
                        <textarea class="form-control" id="content" rows="10" name="content" id="decontentcription"></textarea>
                        @error('content')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Pubblica il tuo nuovo post</button>
                </form>

            </div>
        </div>
    </div>
@endsection