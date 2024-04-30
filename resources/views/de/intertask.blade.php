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
                <p>
                  In der folgenden Übung werden wir Ihnen eine Reihe von 9 Symbolen zeigen. Jedes Symbol ist mit einer Zahl versehen.  <br /><br />
                  Über diesen 9 Symbolen und Zahlen sehen Sie ein einzelnes Symbol in der Mitte des Bildschirms, welches <span style="color:blue">blau </span> eingerahmt ist.  <br /><br />
                  Ihre Aufgabe ist es, so schnell wie möglich die Zahl zu wählen, die zu dem Symbol in der Mitte passt. <br /><br />
                </p>
                <a href="intertask2" class="button is-primary mt-3"> Start </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
