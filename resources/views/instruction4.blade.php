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

                Très bien. Maintenant que vous avez été familiarisé avec les différents éléments du jeu, vous allez pouvoir vous entrainer avec un exemple complet du jeu. <br /><br/>
                <div style="text-align:left; margin-left:20%;">
                  <strong>Résumé des buts : </strong><br />

                  <ul>
                    <li>Récolter les étoiles – chacune vous fera gagner 30 points.</li>
                    <li>Éviter les rochers – chaque collision vous fera perdre 100 points.</li>
                    <li>Détruire les rochers – chaque rocher détruit vous fera gagner 30 points.</li>
                    <li>Faire le plein de carburant – chaque plein réalisé à temps (uniquement quand la jauge est dans le secteur rouge) vous fera gagner 300 points.</li>
                  </ul>

                  <ul>
                    <strong>Rappel des touches :</strong><br />
                    <li>Flèches – piloter le vaisseau.</li>
                    <li>F – tirer des missiles.</li>
                    <li>C – afficher la jauge du niveau de carburant.</li>
                    <li>Barre Espace – faire le plein de carburant.</li>
                  </ul>
                    <p>Vous pouvez à présent effectuer un entraînement.</p>
                    <p> <strong>Appuyez sur le bouton « commencer » pour débuter l'entraînement. </strong></p>
                </div>
                <br /><br />
          	</div>
            <a href="game" class="button is-primary mt-3"> Commencer </a>
      </div>
    @endcomponent
  @endcomponent
@endsection
