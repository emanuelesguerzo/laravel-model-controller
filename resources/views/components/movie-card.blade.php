{{-- Movie Card Component --}}
<div class="card movie-card d-flex flex-column h-100">

    {{-- Card Body --}}
    <div class="card-body d-flex flex-column">

        {{-- Movie Name --}}
        <h2 class="card-title movie-name fs-4 lh-sm mb-2">
            {{ html_entity_decode($titolo) }}
        </h2>

        {{-- Movie Original Name --}}
        <h3 class="text-secondary original-title lh-sm mb-4">
            ({{ $originale }})
        </h3>


        {{-- Movie Nationality --}}
        <span>
            {{ $nazionalita }}
        </span>

        {{-- Movie Release Date --}}
        <span>
            {{ $release }}
        </span>
    </div>

    {{-- Movie Vote --}}
    <div class="card-footer text-body-secondary">
        {{ $voto }}
    </div>
</div>
