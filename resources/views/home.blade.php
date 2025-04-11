{{-- Layout --}}
@extends('layouts.master')

{{-- Browser Tab Title --}}
@section('tab-title', 'Movies - Home')

@section('contenuto')
<div class="container">
    <div class="row gy-4 py-4">

        {{-- Ciclo per ogni film --}}
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">

                {{-- Card Movie --}}
                <x-movie-card 
                    :titolo="$movie['title']"
                    :originale="$movie['original_title']"
                    :nazionalita="$movie['nationality']"
                    :release="$movie['date']"
                    :voto="$movie['vote']"
                />
    
            </div>
        @endforeach
    </div>
</div>
@endsection