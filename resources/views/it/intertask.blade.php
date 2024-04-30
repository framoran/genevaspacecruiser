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
                  Nella seguente attività, ti presenteremo una serie di 9 simboli. Ogni simbolo sarà accompagnato da un numero.<br /><br />

                  Sopra questi 9 simboli e numeri, vedrai un singolo simbolo al centro dello schermocon una cornice <span style="color:blue">blu</span>.<br /><br />

                  Il tuo compito sarà quello di scegliere il numero che corrisponde al simbolo raffigurato al centro il più rapidamente possibile.<br /><br />

                </p>
                <a href="intertask2" class="button is-primary mt-3"> Inizia </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
