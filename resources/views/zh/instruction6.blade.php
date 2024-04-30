@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
                指示指示
              </h1>

              <div>
                <p>
                  现在你需要像练习时一样驾驶飞船。 <br /><br />
                  点击 «开始 »开启游戏。 <br /><br />
                </p>
          	</div>
            <a href="game2" class="button is-primary mt-3"> 開始 </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
