@php
  session_start();
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!-- le nom qu'aura l'onglet de notre site -->
    <meta name=viewport content="width=device-width, initial-scale=1.0" />
    <meta http-equiv=content-type content="text/html; charset=utf-8">
    <title>Geneva Space Cruiser</title>
    <link rel="icon" href="{{ url('css/lives.png') }}">
    <script src=https://code.jquery.com/jquery-1.11.3.min.js></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
    <script type=text/javascript>
        marginLeft = ((window.screen.availWidth - 1200) / 5) / window.screen.availWidth - 1200;
    </script>
    <script>
      // Vaisseau1
      var image_Vaisseau1 = new Image(); // crée un nouvel objet Image
        image_Vaisseau1.src = "{{ asset('/images/vaisseau_base.png') }}"; // définit le chemin vers la source
        image_Vaisseau1.onload = function(){} // instructions appeblant drawImage ici -> permet d'éviter les bugs
      // Vaisseau2
      var image_Vaisseau2 = new Image(); // crée un nouvel objet Image
      image_Vaisseau2.src = "{{ asset('/images/vaisseau_flame1.png') }}"; // définit le chemin vers la source
      image_Vaisseau2.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Vaisseau3
      var image_Vaisseau3 = new Image(); // crée un nouvel objet Image
      image_Vaisseau3.src = "{{ asset('/images/vaisseau_flame2.png') }}"; // définit le chemin vers la source
      image_Vaisseau3.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Vaisseau4
      var image_Vaisseau4 = new Image(); // crée un nouvel objet Image
      image_Vaisseau4.src = "{{ asset('/images/vaisseau_flame3.png') }}"; // définit lce chemin vers la source
      image_Vaisseau4.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Vaisseau5
      var image_Vaisseau5 = new Image(); // crée un nouvel objet Image
      image_Vaisseau5.src = "{{ asset('/images/vaisseau_scores.png') }}"; // définit le chemin vers la source
      image_Vaisseau5.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Collision
      var collision = new Image(); // crée un nouvel objet Image
      collision.src = "{{ asset('/images/vaisseau_touche.png') }}"; // définit le chemin vers la source
      collision.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // étoiles
      var image_stars = new Image(); // crée un nouvel objet Image
      image_stars.src = "{{ asset('/images/etoile_magique1.png') }}"; // définit le chemin vers la source
      image_stars.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // GrosRocher
      var Gros_Rocher = new Image(); // crée un nouvel objet Image
      Gros_Rocher.src = "{{ asset('/images/gros_rocher.png') }}"; // définit le chemin vers la source
      Gros_Rocher.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Missile
      var missile = new Image(); // crée un nouvel objet Image
      missile.src = "{{ asset('/images/missile.png') }}"; // définit le chemin vers la source
      missile.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Missile
      var missile2 = new Image(); // crée un nouvel objet Image
      missile2.src = "{{ asset('/images/missile_explosion.png') }}"; // définit le chemin vers la source
      missile2.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs

      // Comet
      var cometImage = new Image(); // crée un nouvel objet Image
      cometImage.src = "{{ asset('/images/comete.png') }}"; // définit le chemin vers la source
      cometImage.onload = function(){} // instructions appelant drawImage ici -> permet d'éviter les bugs
      
    </script>
    <style>
        canvas {
            padding: 0;
            margin: auto;
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-image:url("{{ asset('/images/galaxie.jpg') }}");
            background-size: cover
        }

        <div id="textDiv"></div>
    </style>
</head>

<body onload=startGame() style=background-color:black>
    <form id=bouton_consigne action="instruction5" method=POST>
        <input type="hidden" name="_token" value="UFW1zncJ14lXarYSgsqjwyaU6srPLeMeFxlpS7Hk" autocomplete="off">        <input style=visibility:hidden name="sendingData" id=bouton type=submit value=Commencer />
    </form>
    
    <script>

        stars_points = 30; // default
        collide_rock = 100; // default
        fire_rock_success = 30; // default
        fill_fuel = 300; // default
        speed_g = 2; // default (min should be 1 and max 4 incrementing with 0.5)
        time_to_refuel = 60000; // default (min 10 seconds and max 60)
        practice_length = 65000;
        task_length = 365000;
        
        text_score = 'Score :';
        text_fuel = 'Carburant';
        text_refueled = 'Vous avez fait le plein!';
        text_end = 'Très bien. L\'entraînement est terminé!';
        text_press_fuel_display_1 = "N’oubliez pas d’appuyer sur “Barre Espace” ";
        text_press_fuel_display_2 = "pour faire le plein quand vous voyez une comète !";
        text_press_fuel_touch_1 = "N’oubliez pas d’appuyer sur “Barre Espace” ";
        text_press_fuel_touch_2 = "pour faire le plein quand vous voyez une comète !";

    </script>

    <script src="/js/practice_comet.js?v=2">

    </script>
</body>


</html>
