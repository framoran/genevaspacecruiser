@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
                Instructie
              </h1>

              <div>
                Op de volgende pagina’s zult u de kans krijgen om te oefenen met het spel. <br> </br>

                U zult beginnen met uzelf vertrouwd maken met het navigeren van het ruimteschip door de pijltjes toetsen te gebruiken die naar boven, naar onder, naar links en naar rechts wijzen. <br> </br>

                U zult ook oefenen met het schieten van raketten door op de “F” toets te drukken. <br> </br>

                Druk op “Start” om de oefen fase te beginnen. <br> </br>

              </div>
              <a href="entrainement1" class="button is-primary mt-5"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
