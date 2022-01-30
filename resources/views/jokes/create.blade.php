@extends('layouts.main')

@section('head-title', 'Jokes | Smiling Jokes')

@section('main-content')
<main>
    <div class="title my-4">
        <h1 class="animate__animated animate__fadeInDown">
            Carica una nuova barzelletta
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <form action="{{ route('jokes.store') }}" method="post" class="animate__animated animate__zoomIn">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Url immagine</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Testo barzelletta</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="ratings" class="form-label">Voto</label>
                    <input type="number" class="form-control" id="ratings" name="ratings">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success mb-3">Crea</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection