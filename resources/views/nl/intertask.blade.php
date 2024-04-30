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

                  In de volgende taak, zullen we u een serie van 9 symbolen laten zien. Ieder symbool zal samengaan met een nummer.  <br /> <br />
                  Boven deze 9 symbolen en nummers zult een één afzonderlijk symbool in het midden van het scherm zien, Het zal met <span style="color:blue">blauw</span> omlijst zijn.  <br /> <br />
                  Uw taak zal zijn om zo snel als mogelijk het nummer te kiezen dat overeenkomt met het symbool in het midden.  <br /> <br />

                </p>
                <a href="intertask2" class="button is-primary mt-3"> Verder </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
