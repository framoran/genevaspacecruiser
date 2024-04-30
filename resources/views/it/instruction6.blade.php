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
                  Ora dovrai guidare l'astronave come hai fatto durante la sessione di pratica.<br /><br />
                  Premi "Inizia" per iniziare.<br /><br />
                </p>
          	</div>
            <a href="game2" class="button is-primary mt-3"> Inizia </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
