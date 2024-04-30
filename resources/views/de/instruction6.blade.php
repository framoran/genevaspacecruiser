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
                  Als nächstes müssen Sie das Raumschiff so steuern, wie Sie es im Training gelernt haben.<br /><br />
                  Bitte drücken Sie "Start", um zu beginnen.<br /><br />
                </p>
          	</div>
            <a href="game2" class="button is-primary mt-3"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
