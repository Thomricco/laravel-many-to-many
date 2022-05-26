
@extends('layouts.main')

@section('content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">
               
            </div>
            <div class="row p-4">

                {{-- ? Per ogni valore rilevante ai fini del salvataggio abbiamo creato: --}}
                {{-- # Un campo modificabile (tipicamente un input) in cui l'utente può inserire i contenuti --}}
                {{-- § Un attributo del campo relativo di input chiamato "name" che ci consente di recupare il valore dal controller --}}
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                        <div id="nameHelp" class="form-text">Inserisci il nome della categoria che vuoi creare</div>
                        @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="color">Colore della categoria</label>
                        <input type="color" class="form-control form-control-color" id="color" value="#00000" title="Seleziona il colore della categoria" name="color">
                        @error('color')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Inserisci la tua nuova categoria</button>
                </form>

            </div>
        </div>
    </div>
@endsection