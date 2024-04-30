@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            @if($redirection_link != null || $redirection_link != "")
                <script>
                  var url ="<?php echo $redirection_link . '?user_id=' . $user_id ?>";
                  window.location.replace(url);
                </script>
            @endif

            <div class="content elements-centered">

              <h1>
              	Istruzioni
              </h1>

              <div>
                <p>
                  Grazie per aver dedicato del tempo per partecipare a questo studio. <br /> <br />
                  Le tue risposte sono state registrate. <br /> <br />
                </p>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
