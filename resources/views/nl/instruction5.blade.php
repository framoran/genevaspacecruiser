@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
                Instructie
              </h1>

              <div>
                <p>

                  Heel goed. U bent klaar met de oefening. <br /> </br />
                  De volgende keer dat u dit spel speelt, zullen de doelen hetzelfde zijn als voor deze oefensessie. <br /> </br />
                  Klik op <strong>"Verder"</strong>. <br /> </br />

                </p>
          	</div>
            <a href="intertask" class="button is-primary mt-3"> Verder </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
