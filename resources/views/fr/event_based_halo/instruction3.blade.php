@extends('layouts.game')

@section('content')
    @component('components.loggued')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content elements-centered">

              <h1>
              	Consigne
              </h1>

            
              <div>
                <p>
                  Très bien ! Votre vaisseau aura également besoin de carburant. <br /><br />

                  Des rochers spéciaux <img src="/images/gros_rocher_special.png" width="75px" style="vertical-align: middle;" /> vont apparaître. Les rochers spéciaux dégagent une énergie que votre vaisseau peut capter pour faire le plein. <br /><br /> 
                 

                  Dès que vous voyez un rocher spécial apparaître, appuyez sur “Barre Espace” pour capter son énergie et faire le plein. Si vous remplissez le réservoir quand vous voyez un rocher spécial, cela vous fera gagner {{$fill_fuel}} points. <br /><br />


                  Si vous oubliez de faire le plein de carburant, le réservoir se remplit automatiquement mais vous ne recevez aucun point. <br /><br />


                  Appuyez sur le bouton « commencer » pour vous familiariser avec la recharge en carburant en captant l’énergie d'un rocher spécial. <br /><br />
                </p>

                <a href="entrainement3" class="button is-primary mt-5"> Commencer </a>

          	</div>
      </div>
    @endcomponent
  @endcomponent
@endsection
