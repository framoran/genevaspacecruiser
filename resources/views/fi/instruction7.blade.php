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
                Ohjeet
              </h1>

              <div>
                <p>
                  Kiitos tutkimukseen osallistumisesta.<br /> <br />
                  Vastauksesi on nyt tallennettu.<br /> <br />
                </p>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
