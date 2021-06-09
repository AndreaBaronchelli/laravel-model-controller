@extends('layouts.main')

@section('content')
    <div class="cards">
        @foreach ($movies as $movie)
            <div class="card">
                <h4>Titolo: {{$movie->title}}</h4>
                <div class="original-title">Titolo originale: {{$movie->original_title}}</div>
                <div class="nationality">Nazione: {{$movie->nationality}}</div>
                <div class="date">Data di uscita: {{$movie->date}}</div>
                <div class="vote"><strong>Voto: {{$movie->vote}}</strong></div>
            </div>
        @endforeach
    </div>
@endsection
