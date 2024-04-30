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

                Nelle pagine seguenti potrai familiarizzare con il gioco. <br /> <br />

                Inizierai familiarizzando con la navigazione dell'astronave usando i tasti freccia che puntano in alto, in basso, a destra e a sinistra. <br /> <br />

                Ti eserciterai anche a sparare missili premendo il tasto "F". <br /> <br />

                Premi <strong> "Inizia" </strong>, per iniziare la fase di familiarizzazione. <br /> <br />

              </div>
              <a href="entrainement1" class="button is-primary mt-5"> Inizia </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
