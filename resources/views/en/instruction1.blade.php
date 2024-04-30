@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            @php

              setcookie('eui',  'none', time() + (86400 * 30), "/"); // 86400 = 1 day

              setcookie('data_recorded',  'none', time() + (86400 * 30), "/"); // 86400 = 1 day

              if (isset($_GET['Experiment_Id'])){

                setcookie('experimentId',  htmlspecialchars($_GET['Experiment_Id']), time() + (86400 * 30), "/"); // 86400 = 1 day

              }else{

                setcookie('experimentId',  'demo', time() + (86400 * 30), "/"); // 86400 = 1 day

              }

              if (isset($_GET['eui'])){

                setcookie('eui',  'S_'.htmlspecialchars($_GET['eui']), time() + (86400 * 30), "/"); // 86400 = 1 day

              }

            @endphp

            <div class="content elements-centered">

              <h1>
              	Instructions
              </h1>

              <div>

                In this task, your goal will be to gain as many points as possible.<br><br>

                To do so, you will navigate a spaceship whose purpose is to collect stars.<br><br>

                For each star that you collect, you will gain 30 points.<br><br>

                You can navigate the spaceship by using the arrow keys on the keyboard (up, down, left, right keys).<br><br>

                You will also have to avoid rocks. If your spaceship collides with one of the rocks, you will lose 100 points. <br><br>

                Thus, try to avoid the rocks by navigating the spaceship. You can also destroy the rocks by firing missiles from your spaceship.<br><br>

                To fire missiles, press the "F" key. If you destroy a rock, you will gain 30 points.<br><br>

                Click on <strong>  "Continue" </strong> to proceed with the instructions.<br><br>

              </div>
              <a href="instruction2" class="button is-primary mt-5"> Continue </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
