@extends('layout.main')

@section('content')

<div class=" container  my-5  flex-wrap">
    <h1>i miei film </h1>
   <p>
       i film.....
    </p>

            @foreach ($movies as $movie)



            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->id }}</h5>
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <h5 class="card-title">{{ $movie->original_title }}</h5>

                  <p class="card-text">{{ $movie->nationality }}</p>
                  <p class="card-text">{{ $movie->date }}</p>
                  <p class="card-text">{{ $movie->vote }}</p>



                </div>
              </div>

            @endforeach





</div>

@endsection
