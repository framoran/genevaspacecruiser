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
                <p>
                  The task will now start and you will see several series of symbols and numbers. <br /><br />
                  As a reminder: your task is to choose the number that matches the symbol in the middle of the screen, framed <span style="color:blue">in blue</span>. Please answer as quickly as possible without making any mistakes.<br /><br />
                  Click on « -> » to start the task. <br /><br />
                </p>
                <a href="intertask4" class="button is-primary mt-3"> -> </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
