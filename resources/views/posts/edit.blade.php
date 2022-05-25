
@extends('layouts.app')

@section('content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">
                
            </div>
            <div class="row p-4">

                {{-- ? Per ogni valore rilevante ai fini del salvataggio abbiamo creato: --}}
                {{-- # Un campo modificabile (tipicamente un input) in cui l'utente può inserire i contenuti --}}
                {{-- § Un attributo del campo relativo di input chiamato "name" che ci consente di recupare il valore dal controller --}}
                <form action="{{ route('posts.update', $post) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{$post->title}}">
                        <div id="titleHelp" class="form-text">Inserisci un titolo che non potrai dimenticare</div>
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @foreach ($categories as $category)
                            <input class="form-check-input" type="checkbox" name="category[]" value="{{$category->id}}"
                            {{-- @if($post->categories->contains($category)) checked @endif --}}
                            {{ $post->categories->contains($category) ? 'checked' : '' }}
                            >
                            <label for="categories" class="badge rounded-pill me-3" style="background-color: {{ $category->color }}">
                                {{$category->name}}
                            </label>
                        @endforeach
                    </div>


                    <div class="mb-3">

                        <label for="content" class="form-label">Inserisci il contenuto del post</label>
                        <textarea class="form-control" id="content" rows="10" name="content" id="content">
                            {{$post->content}}
                        </textarea>
                        @error('content')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Modifica il post</button>
                </form>

            </div>
        </div>
    </div>
@endsection

@dump($categories)