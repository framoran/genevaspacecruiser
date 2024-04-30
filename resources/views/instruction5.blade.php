@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
              	Consigne
              </h1>

              <div>
                <p>
                  Très bien. Vous avez terminé l’entraînement.<br /> </br />
                  La prochaine fois que vous jouerez à ce jeu, les buts seront les mêmes que pendant cet entraînement.<br /> </br />
                  Cliquez sur <strong>« continuer »</strong>.<br /> </br />
                </p>
          	</div>
            <a href="intertask" class="button is-primary mt-3"> Continuer </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
