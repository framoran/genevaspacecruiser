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
                Instructie
              </h1>

              <div>
                <p>

                  Bedankt voor de tijd die u heeft genomen om te participeren in deze studie. <br /> <br />
                  Uw antwoorden zijn opgeslagen.

                </p>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
