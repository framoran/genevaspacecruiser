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
                  Il compito verrà avviato adesso e vedrai diverse serie di simboli e numeri. <br /><br />
                  Come promemoria: il tuo compito è scegliere il numero che corrisponde al simbolo situato al centro dello schermo, contornato di <span style="color:blue">blu</span>. Cerca di rispondere il più rapidamente possibile senza commettere errori. <br /><br />
                  Premi su « -> » per cominciare il compito. <br /><br />
                </p>
                <a href="intertask4" class="button is-primary mt-3"> -> </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
