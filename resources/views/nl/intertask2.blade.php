@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
              	Eerst is hier een voorbeeld:
              </h1>

              <div class="elements-centered">
                <p>
                  <img src="{{ asset('/images/example.png') }}" alt="image example" class="is-centered"/> <br />
                </p>
                <p class="instruction__example">Het correcte antwoord voor deze serie is het nummer 1, omdat de cirkel overeenkomt met het nummer 1. U moet klikken op « 1 » om te antwoorden, zoals hieronder te zien is.</p>
                <div>
                  <button id="1" class="button is-danger">1</button>
                  <button id="2" class="button">2</button>
                  <button id="3" class="button">3</button>
                  <button id="4" class="button">4</button>
                  <button id="5" class="button">5</button>
                  <button id="6" class="button">6</button>
                  <button id="7" class="button">7</button>
                  <button id="8" class="button">8</button>
                  <button id="9" class="button">9</button>
                </div>
                <a href="intertask3" class="button is-primary mt-3"> Doorgaan </a>
          	</div>
          </div>
    @endcomponent
  @endcomponent
@endsection
