@extends('layouts.main')

@section('head-title', 'Detail | Jokes')

@section('main-content')
<main>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-6 animate__animated animate__zoomIn">
                <img src="{{$joke['image']}}" alt="{{$joke['title']}}" class="image-detail mb-4" >
            </div>
            <div class="col-12 col-lg-6 animate__animated animate__zoomIn">
                <div class="info">
                    <h3>
                        {{$joke['title']}}
                    </h3>
                    <p>
                        {{$joke['description']}}
                    </p>
                    <div class="rating">
                        <strong>Voto:</strong> {{$joke['ratings']}}
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn btn-primary my-4">Modifica</a>
                            <a href="#" class="btn btn-danger my-4">Cancella</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back">
        <a href="{{route('jokes.index')}}"><i class="fas fa-arrow-left icon-back"></i>Torna alla pagina di archivio</a>
    </div>
</main>
@endsection