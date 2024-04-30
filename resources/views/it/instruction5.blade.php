@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
                Istruzioni
              </h1>

              <div>
                <p>
                  Molto bene. Hai completato la sessione di pratica.<br/> <br/>
                  La prossima volta che giocherai a questo gioco, gli obiettivi saranno gli stessi di questa sessione di allenamento. <br/> <br/>
                  Clicca su <strong> "Continua" </strong>.<br/> <br/>
                </p>
          	</div>
            <a href="intertask" class="button is-primary mt-3"> Continua </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
