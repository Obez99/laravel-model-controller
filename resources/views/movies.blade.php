@extends('layouts/default')

@section('content')
    <div class="container">
      <div class="row row-cols-5 mt-5"> 
        @foreach ($movies as $movie)
        <div class="col mt-5">    
          <div class="card h-100 text-white bg-dark">
            <div class="card-body">
              <h5 class="card-title text-danger pb-3">{{$movie->title}}</h5>
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