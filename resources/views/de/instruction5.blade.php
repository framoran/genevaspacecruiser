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
                  Sehr gut. Sie haben das Training abgeschlossen.<br/> <br/>
                  Wenn Sie dieses Spiel das nächste Mal spielen, sind die Ziele die gleichen wie bei diesem Training.<br/> <br/>
                  Bitte klicken Sie auf <strong> "Weiter" </strong>.<br/> <br/>
                </p>
          	</div>
            <a href="intertask" class="button is-primary mt-3"> Weiter </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
