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

                Very good. Now that you are familiar with the different elements of the game, you can practice on a complete example of the game. <br /> <br />

                <div style="text-align:left; margin-left:20%;">
                  <strong>Summary of the goals: <br /></strong>
                  <ul>
                    <li> Collect stars – for each one you will gain 30 points. </li>
                    <li> Avoid rocks – each collision will cost you 100 points. </li>
                    <li> Destroy rocks – for each destroyed rock, you will gain 30 points. </li>
                    <li> Refuel the spaceship – each time you refuel on time (when the gauge is in the red section only), you will gain 300 points. </li>
                  </ul>
                </div>
                <br />
                <div style="text-align:left; margin-left:20%;">
                  <strong>Key reminder: <br /></strong>
                  <ul>
                    <li> Arrows – to navigate the spaceship. </li>
                    <li> F – to fire missiles. </li>
                    <li> C – to display the fuel gauge. </li>
                    <li> Space bar – to refuel. </li>
                  </ul>
                </div>
                <br /><br />
                You can now do a full practice session. <br /><br />

                Press <strong> "start" </strong> to begin the practice. <br /><br />

          	</div>
            <a href="game" class="button is-primary mt-3"> Start </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
