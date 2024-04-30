@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
              	Anweisungen
              </h1>

              <div>

                Auf den folgenden Seiten können Sie sich mit dem Spiel vertraut machen.<br /> <br />

                Zunächst werden Sie sich mit der Bewegung des Raumschiffs vertraut machen, in dem Sie die
                Pfeiltasten nach oben, unten, rechts und links benutzen.<br /> <br />

                Sie werden ebenfalls das Abfeuern von Raketen üben, indem Sie die Taste "F" drücken.<br /> <br />

                Drücken Sie auf <strong> "Start" </strong>, um mit dem Training zu beginnen.<br /> <br />

              </div>
              <a href="entrainement1" class="button is-primary mt-5"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
