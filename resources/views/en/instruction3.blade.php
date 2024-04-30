@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
              	Instructions
              </h1>

              <div>

                Very good! Next, your spaceship will also need fuel. <br /> <br />

                You can display the fuel gauge by pressing the "C" key. <br /> <br />

                As soon as the fuel gauge is in the red section, you can refuel your spaceship by pressing the space bar on your keyboard. If you refuel it at the right time, you will gain 300 points. <br /> <br />

                If you forget to refuel it, the fuel gauge will automatically refill but you will not receive any points. <br /> <br />

                Press <strong> "Start" </strong> to familiarize yourself with the fuel level of your spaceship. <br /> <br />

              </div>
              <a href="entrainement3" class="button is-primary mt-5"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
