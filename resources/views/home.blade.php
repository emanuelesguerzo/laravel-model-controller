@extends('layouts.master')

@section('tab-title', 'Movies - Home')

@section('contenuto')
<div class="container">
    <div class="row">

        {{-- Ciclo per ogni film --}}
        @foreach ($movies as $movie)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-2 mt-4">

                <x-movie-card>
                    <x-slot:titolo>
                        {{ $movie['title'] }}
                    </x-slot:titolo>
                    <x-slot:originale>
                        {{ $movie['original_title'] }}
                    </x-slot:originale>
                    <x-slot:nazionalita>
                        {{ $movie["nationality"] }}
                    </x-slot:nazionalita>
                    <x-slot:release>
                        {{ $movie['date'] }}
                    </x-slot:release>
                    <x-slot:voto>
                        {{ $movie['vote'] }}
                    </x-slot:voto>

                </x-movie-card>
                
            </div>
        @endforeach
    </div>
</div>
@endsection