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
                  Als nächstes beginnt die Aufgabe und Sie werden mehrere Serien von Symbolen und Zahlen sehen.  <br /><br />
                  Zur Erinnerung: Ihre Aufgabe ist es, die Zahl zu wählen, die dem<span style="color:blue"> blau</span> umrahmten Symbol in der Mitte entspricht. Bitte antworten Sie möglichst schnell und möglichst fehlerfrei.  <br /><br />
                  Bitte klicken Sie auf " -> ", um die Aufgabe zu starten. <br /><br />
                </p>
                <a href="intertask4" class="button is-primary mt-3"> -> </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
