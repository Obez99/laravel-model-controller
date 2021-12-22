@extends('layouts/default')

@section('content')
    <h1 class="text-center">Movies</h1>


    <div class="container">
      <div class="row row-cols-5 mt-5">
        @foreach ($movies as $movie)
        <div class="col">    
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <p class="card-text"><strong>Original title</strong>: {{$movie->original_title}}</p>
              <p class="card-text"><strong>Nationality</strong>: {{$movie->nationality}}</p>
              <p class="card-text"><strong>Date</strong>: {{$movie->date}}</p>
              <p class="card-text"><strong>Vote</strong>: {{$movie->vote}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
@endsection