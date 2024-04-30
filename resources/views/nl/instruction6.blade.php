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
                  Nu zal u het ruimteschip navigeren zoals u tijdens de oefensessie deed. <br /><br />
                  Klik op « start » om te beginnen. <br /><br />
                </p>
          	</div>
            <a href="game2" class="button is-primary mt-3"> Beginnen </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
