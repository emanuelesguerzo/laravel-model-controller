{{-- Importiamo i valori da Home --}}
@props(['titolo', 'originale', 'nazionalita', 'release', 'voto'])

{{-- Logica --}}
@php

    // Stelline
    $voto = floatval($voto);
    $stellePiene = floor($voto);
    $haMezzaStella = fmod($voto, 1) >= 0.5;
    $stelleVuote = 10 - $stellePiene - ($haMezzaStella ? 1 : 0);

    // Formattazione data
    $data_formattata = \Carbon\Carbon::parse($release)->format('d/m/Y');

@endphp

<div class="card movie-card d-flex flex-column h-100">

    {{-- Card Body --}}
    <div class="card-body d-flex flex-column">

        {{-- Movie Name --}}
        <h2 class="card-title movie-name fs-4 lh-sm mb-1">
            {{ html_entity_decode($titolo) }}
        </h2>

        {{-- Movie Original Name --}}
        <h3 class="text-secondary original-title lh-sm mb-3">
            ({{ $originale }})
        </h3>

        {{-- Nationality --}}
        <span class="text-secondary mb-3">
            {{ $nazionalita }}
        </span>

        {{-- Release Date --}}
        <span class="text-secondary">
            {{ $data_formattata }}
        </span>

    </div>

    {{-- Voto Movie --}}
    <div class="card-footer user-select-none text-body-secondary bg-primary-subtle py-2 rounded-bottom">

        {{-- Stelle --}}
        @for ($i = 0; $i < $stellePiene; $i++)
            <i class="fa-solid fa-star text-primary"></i>
        @endfor

        @if ($haMezzaStella)
            <i class="fa-solid fa-star-half-stroke text-primary"></i>
        @endif

        @for ($i = 0; $i < $stelleVuote; $i++)
            <i class="fa-regular fa-star text-primary"></i>
        @endfor

        <span class="text-primary">({{ number_format($voto, 1) }})</span>
    </div>

</div>
