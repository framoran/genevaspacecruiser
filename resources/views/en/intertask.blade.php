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
                  In the following task, we will present you a series of 9 symbols. Each symbol will be accompanied by a number.  <br /><br />

                  Above these 9 symbols and numbers, you will see a single symbol in the middle of the screen. It will be framed <span style="color:blue">in blue</span>. <br /><br />

                  Your task will be to choose the number that matches the symbol in the middle as quickly as possible.<br /><br />

                </p>
                <a href="intertask2" class="button is-primary mt-3"> Start </a>
          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
