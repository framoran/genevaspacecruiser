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
              	Anweisungen
              </h1>

              <div>
                <p>
                  Vielen Dank, dass Sie sich die Zeit genommen haben, an dieser Studie teilzunehmen.<br /> <br />
                  Ihre Antworten wurden aufgezeichnet.<br /> <br />
                </p>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
