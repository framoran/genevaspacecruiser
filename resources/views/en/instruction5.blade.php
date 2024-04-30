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
                  Very good. You have completed the practice.  <br/> <br/>
                  Next time you will play this game, the goals will be the same as for this practice session. <br/> <br/>
                  Click on <strong> "continue" </strong>. <br/> <br/>
                </p>
          	</div>
            <a href="intertask" class="button is-primary mt-3"> Continue </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
