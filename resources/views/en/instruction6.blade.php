@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
              	Instruction
              </h1>

              <div>
                <p>
                  Now you will have to navigate the spaceship as you did during the practice session. <br /><br />
                  Click on « start » to begin. <br /><br />
                </p>
          	</div>
            <a href="game2" class="button is-primary mt-3"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
