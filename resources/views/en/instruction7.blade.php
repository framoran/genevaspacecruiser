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
              	Instruction
              </h1>

              <div>
                <p>
                  Thank you for taking the time to participate in this study.<br /> <br />
                  Your answers have been recorded.<br /> <br />
                </p>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
