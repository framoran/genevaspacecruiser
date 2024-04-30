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
                In the following pages, you will be able to familiarize yourself with the game.<br /> <br />

                You will start by familiarizing yourself with the navigation of the spaceship by using the arrow keys pointing up, down, right, and left. <br /><br />

                You will also practice shooting missiles by pressing the "F" key.<br /><br />

                Press <strong> "Start" </strong> to begin the familiarization phase.<br /><br />

              </div>
              <a href="entrainement1" class="button is-primary mt-5"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
