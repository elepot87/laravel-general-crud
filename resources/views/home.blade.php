@extends('layouts.main')

@section('head-title', 'Home | Jokes')

@section('main-content')
<main>
    <div class="container home-page">
        <h1 class="animate__animated animate__fadeInDown">Chi non ride mai non è una persona seria.</h1>
        <h3 class="animate__animated animate__fadeInUp">-Fryderyk Chopin-</h3>
        <button type="button" class="btn btn-secondary cta mt-5 animate_animated animate__bounceIn animate__slower">
            <a href="{{route('jokes.index')}}">Read Jokes</a> 
        </button>
    </div>
</main>
@endsection