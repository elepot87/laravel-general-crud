@extends('layouts.main')

@section('head-title', 'Jokes | Smiling Jokes')

@section('main-content')
<main>
    <div class="title my-4">
        <h1 class="animate__animated animate__fadeInDown">
            Pagina archivio Jokes
        </h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($jokes as $joke)
                <div class="col-12 col-lg-4">
                    <div class="card animate__animated animate__zoomIn mb-4">
                        <img src="{{$joke['image']}}" alt="{{$joke['title']}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('jokes.show', $joke->slug)}}">
                                    {{$joke['title']}}
                                </a>
                            </h5>
                            <p class="card-text">
                                {{$joke['description']}}
                            </p>
                            <div class="rating">
                               <strong>Voto:</strong> {{$joke['ratings']}}
                            </div>
                            <a href="{{ route ('jokes.edit', $joke->id)}}" class="btn btn-primary my-4">Modifica</a>
                            <a href="#" class="btn btn-danger my-4">Cancella</a>
                        </div>
                    </div>
                </div>     
            @endforeach
        </div>
    </div>
</main>
@endsection