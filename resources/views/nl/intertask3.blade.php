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

                  De taak zal nu starten en u zal een aantal series van symbolen en nummers zien. <br /><br />
                  Ter herinnering: Uw taak is om het nummer te kiezen dat overeenkomt met het <span style="color:blue">blauw</span> omlijste symbool in het midden van het scherm. Antwoord alstublieft zo snel mogelijk zonder fouten te maken. <br /><br />
                  Klik op « -> » om de taak te starten. <br /><br />

                </p>
                <a href="intertask4" class="button is-primary mt-3"> -> </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
