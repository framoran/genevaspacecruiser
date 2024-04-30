@php
  session_start();
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Game</title>
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
        @csrf
        <input style=visibility:hidden name="sendingData" id=bouton type=submit value=Commencer />
    </form>
    <script>
        document.body.addEventListener('keydown', event => {
          if (event.ctrlKey && 'dfcvxspwuaz'.indexOf(event.key) !== -1) {
            event.preventDefault()
          }
        })
        var Vaisseau;

        function startGame() {
            n_tpsq = new Date().getTime();
            game.start()
        }
        var game = {
            canvas1: document.createElement("canvas"),
            start: function() {
                x_time = new Date().getTime();
                this.redirect = false;
                this.globalName = true;
                this.canvas1.width = 1000;
                this.canvas1.height = 600;
                this.context = this.canvas1.getContext("2d");
                document.body.insertBefore(this.canvas1, document.body.childNodes[0]);

                function d() {
                    if (new Date().getTime() < +x_time + 65000) {
                        updateGame()
                    } else {
                        context = game.context;
                        context.fillStyle = "#000000";
                        context.fillRect(0, 0, 2000, 2000);
                        context.font = "25px Verdana";
                        context.fillStyle = "#FFFFFF";
                        context.fillText("Very good. You have completed the practice session.", 150, 300);
                        game.redirect = true
                    }
                }

                function c(f) {
                    var h = f + "=";
                    var e = document.cookie.split(";");
                    for (var g = 0; g < e.length; g++) {
                        var j = e[g];
                        while (j.charAt(0) === " ") {
                            j = j.substring(1, j.length)
                        }
                        if (j.indexOf(h) === 0) {
                            return j.substring(h.length, j.length)
                        }
                    }
                    return null
                }

                function a() {
                    if (game.redirect == false) {
                        d()
                    } else {
                        clearInterval(game.Interval);
                        Start = function() {
                            cnameScore = "score_practice";
                            cnameStar = "star_practice";
                            cnameImpact = "impact_practice";
                            cname_checkEssence = "checkEssence_practice";
                            cname_essenceRight = "essenceRight_practice";
                            cname_essenceWrong = "essenceWrong_practice";
                            cname_drawing = "drawing_practice";
                            cname_tirMissile = "tirMissile_practice";
                            cname_impactMissile = "impactMissile_practice";
                            expires = "Thu, 30 Dec 2030 12:00:00 UTC";
                            document.cookie = cnameScore + "= ;" + expires;
                            document.cookie = cnameStar + "= ;" + expires;
                            document.cookie = cnameImpact + "= ;" + expires;
                            document.cookie = cname_checkEssence + "= ;" + expires;
                            document.cookie = cname_essenceRight + "= ;" + expires;
                            document.cookie = cname_essenceWrong + "= ;" + expires;
                            document.cookie = cname_drawing + "= ;" + expires;
                            document.cookie = cname_tirMissile + "= ;" + expires;
                            document.cookie = cname_impactMissile + "= ;" + expires;
                            cvalue1 = score;
                            cvalue2 = star;
                            cvalue3 = impact;
                            cvalue4 = checkEssence;
                            cvalue5 = essenceRight;
                            cvalue6 = essenceWrong;
                            cvalue7 = drawing;
                            cvalue8 = tirMissile;
                            cvalue9 = impactMissile;
                            document.cookie = cnameScore + "=" + cvalue1 + ";" + expires;
                            document.cookie = cnameStar + "=" + cvalue2 + ";" + expires;
                            document.cookie = cnameImpact + "=" + cvalue3 + ";" + expires;
                            document.cookie = cname_checkEssence + "=" + cvalue4 + ";" + expires;
                            document.cookie = cname_essenceRight + "=" + cvalue5 + ";" + expires;
                            document.cookie = cname_essenceWrong + "=" + cvalue6 + ";" + expires;
                            document.cookie = cname_drawing + "=" + cvalue7 + ";" + expires;
                            document.cookie = cname_tirMissile + "=" + cvalue8 + ";" + expires;
                            document.cookie = cname_impactMissile + "=" + cvalue9 + ";" + expires;
                            var g = c("score");
                            var f = c("star");
                            var e = c("impact");
                            var n = c("checkEssence");
                            var m = c("essenceRight");
                            var l = c("essenceWrong");
                            var k = c("drawing");
                            var j = c("tirMissile");
                            var h = c("impactMissile");
                            console.log("score=" + g);
                            console.log("star=" + f);
                            console.log("impact=" + e);
                            console.log("checkEssence=" + n);
                            console.log("essenceRight=" + m);
                            console.log("essenceWrong=" + l);
                            console.log("drawing=" + k);
                            console.log("drawing=" + j);
                            console.log("impactMissile=" + h);
                            setTimeout("stop()", 2000);
                            stop = function() {
                                $("#bouton").click()
                            }
                        };
                        setTimeout("Start()", 1000);
                        clearInterval(game.interval)
                    }
                }
                this.interval = setInterval(a, 1);
                Controller = {
                    keyIsDown: [],
                    add: function(f, g, e) {
                        $(document).keydown(function(h) {
                            if (h.keyCode === f && !Controller.keyIsDown[f]) {
                                g();
                                Controller.keyIsDown[f] = true;
                                return false
                            }
                        });
                        $(document).keyup(function(h) {
                            if (h.keyCode === f) {
                                if (e) {
                                    e()
                                }
                                Controller.keyIsDown[f] = false;
                                return false
                            }
                        })
                    },
                };
                Controller.add(70, function() {
                    game.keyCode1 = true
                }, function() {
                    game.keyCode1 = false
                });
                Controller.add(67, function() {
                    game.keyCode2 = true
                }, function() {
                    game.keyCode2 = false
                });
                Controller.add(32, function() {
                    game.keyCode3 = true
                }, function() {
                    game.keyCode3 = false
                });
                Controller.add(37, function() {
                    game.keyCode5 = true
                }, function() {
                    game.keyCode5 = false
                });
                Controller.add(38, function() {
                    game.keyCode6 = true
                }, function() {
                    game.keyCode6 = false
                });
                Controller.add(39, function() {
                    game.keyCode7 = true
                }, function() {
                    game.keyCode7 = false
                });
                Controller.add(40, function() {
                    game.keyCode8 = true
                }, function() {
                    game.keyCode8 = false
                });
                var b = new Date().getTime();
                myGamePiece_Time = new temps(b);
                myGamePiece_Vaisseau = new Vaisseau(20, 600);
                myGamePiece_Etoiles = new Etoiles();
                myGamePiece_Affichage = new message();
                myGamePiece_GrosRocher = new GrosRocher();
                myGamePiece_Missile = new Missile();
                myGamePiece_Evenements = new Evenement();
                myGamePiece_Drawing = new Drawing()
            },
            clear: function() {
                this.context.clearRect(0, 0, this.canvas1.width, this.canvas1.height)
            }
        };

        function getRandomInt(b, a) {
            return Math.floor(Math.random() * (a - b + 1)) + b
        }
        var starsX = [];
        var starsY = [];
        for (var i = 0; i < 10; i++) {
            starsX.push((getRandomInt(1500, 10000)));
            starsY.push(getRandomInt(25, 570))
        }
        var RockX = [];
        var RockY = [];
        for (var i = 0; i <= 4; i++) {
            if (i == 0) {
                RockX.push(2000);
                RockY.push(200);
            } else if (i == 1) {
                RockX.push(3000);
                RockY.push(500);
            } else if (i == 2) {
                RockX.push(4000);
                RockY.push(300);
            } else if (i == 3) {
                RockX.push(5000);
                RockY.push(400);
            }
        }
        impact = [];
        star = [];
        essenceRight = [];
        essenceWrong = [];
        checkEssence = [];
        var score = 0;
        var star_x = 0;
        var star_y = 0;
        var temps_essence = 0;
        var drawing = 0;
        var tirMissile = 0;
        var impactMissile = 0;
        crash = function(a) {
            var b = 0;
            a.img = collision;
            setTimeout("change_image(myGamePiece_Vaisseau)", 150)
        };
        getStar = function(a) {
            var b = 0;
            a.img = image_Vaisseau5;
            setTimeout("change_image(myGamePiece_Vaisseau)", 150)
        };
        change_image = function(a) {
            a.img = image_Vaisseau1
        };
        acceleration = function(a) {
            a.img = image_Vaisseau3
        };
        accelerationNulle = function(a) {
            a.img = image_Vaisseau1
        };
        changeX = function(a) {
            a.x = 800;
            setTimeout("restoreX(myGamePiece_Affichage)", 2000)
        };
        restoreX = function(a) {
            a.x = 2000
        };
        checkimpact = function(a) {
            a.impact = true;
            setTimeout("change_impact(myGamePiece_Vaisseau)", 150)
        };
        change_impact = function(a) {
            a.impact = false
        };
        checkimpact2 = function(a) {
            a.impact2 = true;
            setTimeout("change_impact2(myGamePiece_Vaisseau)", 150)
        };
        change_impact2 = function(a) {
            a.impact2 = false
        };
        nouveau_missile = function(a) {
            a.nouveau_tir = true;
            setTimeout("reset_missile(myGamePiece_Missile)", 1000)
        };
        reset_missile = function(a) {
            a.nouveau_tir = false
        };
        RocherExplosion = function(a, b) {
            setTimeout("RocherExplosion2(myGamePiece_GrosRocher, myGamePiece_Missile)", 20)
        };
        RocherExplosion2 = function(a, b) {
            b.img = missile2;
            setTimeout("RocherExplosion3(myGamePiece_GrosRocher, myGamePiece_Missile)", 20);
            b.sizeMx = 175;
            b.sizeMy = 150
        };
        RocherExplosion3 = function(a, b) {
            b.img = missile2;
            setTimeout("RocherExplosion4(myGamePiece_GrosRocher, myGamePiece_Missile)", 20);
            b.sizeMx = 200;
            b.sizeMy = 175
        };
        RocherExplosion4 = function(a, b) {
            b.img = missile2;
            setTimeout("RocherExplosion5(myGamePiece_GrosRocher, myGamePiece_Missile)", 20);
            b.sizeMx = 225;
            b.sizeMy = 200
        };
        RocherExplosion5 = function(a, b) {
            b.img = missile2;
            b.sizeMx = 250;
            b.sizeMy = 225;
            setTimeout("RocherExplosion6(myGamePiece_GrosRocher, myGamePiece_Missile)", 20)
        };
        RocherExplosion6 = function(a, b) {
            b.img = missile2;
            b.sizeMx = 275;
            b.sizeMy = 250;
            setTimeout("RocherExplosion7(myGamePiece_GrosRocher, myGamePiece_Missile)", 20)
        };
        RocherExplosion7 = function(a, b) {
            b.x = 2000;
            b.sizeMx = 75;
            b.sizeMy = 50;
            b.img = missile
        };

        function temps(b) {
            this.time = b;
            var a = new Date().getTime();
            this.timeStart = a
        }

        function Drawing() {
            this.x = 0;
            this.y = -200;
            this.Speed = 1;
            this.sizeMx = 75;
            this.sizeMy = 50;
            this.img = missile;
            this.draw = function() {
                context = game.context;
                context.drawImage(this.img, this.x, myGamePiece_Drawing.y, this.sizeMx, this.sizeMy);
                this.x += 1
            }
        }

        function Missile() {
            this.x = 2500;
            this.y = 0;
            this.sizeMx = 75;
            this.sizeMy = 50;
            this.img = missile;
            this.check = false;
            this.tir = false;
            this.nouveau_tir = false;
            this.Speed = 0;
            this.draw = function() {
                context = game.context;
                context.drawImage(this.img, this.x, myGamePiece_Missile.y, this.sizeMx, this.sizeMy);
                this.x += this.Speed
            }
        }

        function Vaisseau(a, b) {
            this.speedX = 0;
            this.speedY = 0;
            this.x = a;
            this.y = b;
            this.i = 0;
            this.impact = false;
            this.impact2 = false;
            this.img = image_Vaisseau1;
            this.keyjump = 0;
            this.jump = 0;
            this.update = function() {
                context = game.context;
                context.drawImage(this.img, this.x, this.y, 150, 75);
                this.x += this.speedX;
                this.y += this.speedY
            }
        }

        function message() {
            this.x = "3500";
            this.y = 50;
            this.count = 0;
            this.longueur = 150;
            this.color = "#01DF01";
            this.score1 = 0;
            this.affichage_plein = 2000;
            this.countPress = 0;
            this.countPressPlein = 0;
            this.keypress = false;
            this.AffichageTouche_C = 2500;
            this.AffichageTouche_E = 2500;
            this.draw = function() {
                context = game.context;
                context.font = "30px Verdana";
                context.fillStyle = "#FFFFFF";
                context.fillText("Fuel", this.x, this.y);
                context.fillStyle = this.color;
                context.fillRect(this.x, this.y + 25, this.longueur, 20);
                context.font = "30px Verdana";
                context.fillStyle = "#F0FFFF";
                context.beginPath();
                context.lineWidth = "2";
                context.strokeStyle = "#FFFFFF";
                context.rect(this.x, this.y + 25, 150, 20);
                context.stroke();
                context.fillStyle = "#3CBC3C";
                context.fillText("You have refueled!", this.affichage_plein, 100);
                context.fillStyle = "#FFFFFF";
                context.fillText('Press the "C" key on your keyboard to ', this.AffichageTouche_C, 250);
                context.fillText('display the fuel gauge.', this.AffichageTouche_C, 300);
                context.fillText("The fuel level is critical, press", this.AffichageTouche_E, 250);
                context.fillText("the space bar to refuel.", this.AffichageTouche_E, 300);
                if ((game.keyCode2 == true) && (myGamePiece_Affichage.keypress == false)) {
                    myGamePiece_Affichage.countPress = 1;
                    var a = new Date().getTime() - myGamePiece_Time.timeStart;
                    checkEssence.push(a);
                    myGamePiece_Affichage.keypress = true;
                    changeX(myGamePiece_Affichage);
                    setTimeout("keyRestore()", 1000);
                    keyRestore = function() {
                        myGamePiece_Affichage.keypress = false
                    }
                }
                if (new Date().getTime() > myGamePiece_Time.time + 1000) {
                    temps_essence += 1;
                    if (temps_essence > 60) {
                        temps_essence -= 60;
                        this.longueur = 150;
                        this.color = "#01DF01";
                        this.affichage_plein = 2000
                    }
                    myGamePiece_Time.time += 1000;
                    this.longueur -= 2.5;
                    if (temps_essence > 30 && temps_essence < 50) {
                        this.color = "#FFFF00";
                        if (myGamePiece_Affichage.countPress == 0) {
                            myGamePiece_Affichage.AffichageTouche_C = 200
                        } else {
                            myGamePiece_Affichage.AffichageTouche_C = 2500
                        }
                    } else {
                        if (temps_essence > 50 && temps_essence < 60) {
                            this.color = "#FF0000";
                            if (myGamePiece_Affichage.countPressPlein == 0) {
                                myGamePiece_Affichage.countPress = 1;
                                myGamePiece_Affichage.AffichageTouche_C = 2500;
                                myGamePiece_Affichage.AffichageTouche_E = 200
                            }
                        } else {
                            myGamePiece_Affichage.AffichageTouche_E = 2500;
                            myGamePiece_Affichage.AffichageTouche_C = 2500;
                            myGamePiece_Affichage.countPress = 0;
                            myGamePiece_Affichage.countPressPlein = 0
                        }
                    }
                }
                if ((temps_essence > 50 && temps_essence < 60) && (game.keyCode3 == true) && (myGamePiece_Affichage.keypress == false)) {
                    this.affichage_plein = 15;
                    this.countPressPlein = 1;
                    var b = new Date().getTime() - myGamePiece_Time.timeStart;
                    essenceRight.push(b);
                    myGamePiece_Affichage.keypress = true;
                    setTimeout("keyRestore()", 1000);
                    keyRestore = function() {
                        myGamePiece_Affichage.keypress = false
                    };
                    myGamePiece_Affichage.score1 += 300;
                    temps_essence = 0;
                    this.longueur = 150;
                    this.color = "#01DF01";
                    setTimeout("affichagePleinRestore()", 2500);
                    affichagePleinRestore = function() {
                        this.affichage_plein = 2000;
                        myGamePiece_Affichage.affichage_plein = 2000
                    }
                } else {
                    if ((temps_essence > 0 && temps_essence < 50) && (game.keyCode3 == true) && (myGamePiece_Affichage.keypress == false)) {
                        var b = new Date().getTime() - myGamePiece_Time.timeStart;
                        essenceWrong.push(b);
                        myGamePiece_Affichage.keypress = true;
                        setTimeout("keyRestore()", 1000);
                        keyRestore = function() {
                            myGamePiece_Affichage.keypress = false
                        }
                    }
                }
            }
        }

        function GrosRocher() {
            this.img = Gros_Rocher;
            this.draw = function a() {
                context = game.context;
                for (var c = 0; c < 4; c++) {
                    this.x = RockX[c];
                    this.y = RockY[c];
                    context.drawImage(this.img, this.x, this.y, 150, 75);
                    RockX[c] -= 1;
                    if (RockX[c] < -200) {
                        RockX[c] = (getRandomInt(2000, 3000))
                    }
                    if ((myGamePiece_Vaisseau.x > (RockX[c] - 100)) && (myGamePiece_Vaisseau.x < (RockX[c] + 100)) && (myGamePiece_Vaisseau.y > (RockY[c] - 75)) && (myGamePiece_Vaisseau.y < (RockY[c] + 75))) {
                        var d = new Date();
                        var e = d.getTime() - myGamePiece_Time.timeStart;
                        impact.push(e);
                        RockX[c] = (getRandomInt(1600, 2500));
                        RockY[c] = (getRandomInt(25, 570));
                        if (myGamePiece_Affichage.score1 > 0 && myGamePiece_Affichage.score1 <= 100) {
                            myGamePiece_Affichage.score1 = 0
                        } else {
                            if (myGamePiece_Affichage.score1 > 100) {
                                myGamePiece_Affichage.score1 -= 100
                            }
                        }
                        crash(myGamePiece_Vaisseau);
                        checkimpact(myGamePiece_Vaisseau)
                    }
                    if ( (myGamePiece_Missile.nouveau_tir == true) && (myGamePiece_Missile.x > 0) && (myGamePiece_Missile.x < 1500) && (myGamePiece_Missile.x > (RockX[c] - 1)) && (myGamePiece_Missile.x < (RockX[c] + 40)) && (myGamePiece_Missile.y > (RockY[c] - 40)) && (myGamePiece_Missile.y < (RockY[c] + 40))) {
                        if (myGamePiece_Affichage.score1 >= 0) {
                            myGamePiece_Affichage.score1 += 30
                        }
                        impactMissile += 1;
                        myGamePiece_Missile.x = RockX[c] + 50;
                        myGamePiece_Missile.Speed = 0;
                        myGamePiece_Missile.sizeMx = 150;
                        myGamePiece_Missile.sizeMy = 125;
                        myGamePiece_Missile.y = RockY[c] - 50;
                        RocherExplosion(myGamePiece_GrosRocher, myGamePiece_Missile);
                        RockX[c] = (getRandomInt(2000, 3000));
                        RockY[c] = (getRandomInt(25, 570))
                    }
                    for (var b = 0; b < 10; b++) {
                        if (((RockX[c]) > (RockX[b] - 300)) && ((RockX[c]) < (RockX[b] + 300)) && ((RockY[c]) > (RockY[b] - 300)) && ((RockY[c]) < (RockY[b] + 300)) && (b != c)) {
                            RockX[c] = (getRandomInt(2000, 3000));
                            RockY[c] = (getRandomInt(25, 570))
                        }
                    }
                }
            }
        }

        function Etoiles() {
            this.gamearea = game;
            this.img = image_stars;
            this.draw = function() {
                context = game.context;
                for (var b = 0; b < 10; b++) {
                    this.x = starsX[b];
                    this.y = starsY[b];
                    context.drawImage(this.img, this.x, this.y, 50, 50);
                    starsX[b] -= 2;
                    if (starsX[b] < -50) {
                        starsX[b] = (getRandomInt(1600, 2500));
                        starsY[b] = (getRandomInt(25, 570))
                    }
                    if ((myGamePiece_Vaisseau.x > (starsX[b] - 100)) && (myGamePiece_Vaisseau.x < (starsX[b] + 25)) && (myGamePiece_Vaisseau.y > (starsY[b] - 90)) && (myGamePiece_Vaisseau.y < (starsY[b] + 50))) {
                        var c = new Date().getTime() - myGamePiece_Time.timeStart;
                        star.push(c);
                        getStar(myGamePiece_Vaisseau);
                        checkimpact2(myGamePiece_Vaisseau);
                        starsX[b] = (getRandomInt(1600, 2500));
                        starsY[b] = (getRandomInt(25, 570));
                        if (myGamePiece_Affichage.score1 >= 0) {
                            myGamePiece_Affichage.score1 += 30
                        }
                    }
                    for (var a = 0; a < 10; a++) {
                        if (((starsX[b]) > (starsX[a] - 200)) && ((starsX[b]) < (starsX[a] + 200)) && ((starsY[b]) > (starsY[a] - 200)) && ((starsY[b]) < (starsY[a] + 200)) && (a != b)) {
                            starsX[b] = (getRandomInt(1600, 2500));
                            starsY[b] = (getRandomInt(25, 570))
                        }
                    }
                }
            }
        }

        function Evenement() {
            this.update = function() {
                myGamePiece_Vaisseau.speedX = -1.5;
                myGamePiece_Vaisseau.speedY = 0;
                myGamePiece_Vaisseau.Speed = 0;
                if (game.keyCode5 == true && game.keyCode6 == true) {
                    myGamePiece_Vaisseau.speedX = -3;
                    myGamePiece_Vaisseau.speedY = -3
                } else {
                    if (game.keyCode5 == true && game.keyCode8 == true) {
                        myGamePiece_Vaisseau.speedX = -3;
                        myGamePiece_Vaisseau.speedY = 3
                    } else {
                        if (game.keyCode7 == true && game.keyCode6 == true) {
                            myGamePiece_Vaisseau.speedX = 3;
                            myGamePiece_Vaisseau.speedY = -3
                        } else {
                            if (game.keyCode7 == true && game.keyCode8 == true) {
                                myGamePiece_Vaisseau.speedX = 3;
                                myGamePiece_Vaisseau.speedY = 3
                            } else {
                                if (game.keyCode5 == true) {
                                    myGamePiece_Vaisseau.speedX = -3
                                } else {
                                    if (game.keyCode6 == true) {
                                        myGamePiece_Vaisseau.speedY = -3
                                    } else {
                                        if (game.keyCode7 == true) {
                                            myGamePiece_Vaisseau.speedX = 3
                                        } else {
                                            if (game.keyCode8 == true) {
                                                myGamePiece_Vaisseau.speedY = 3
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                if (game.keyCode7 == true && myGamePiece_Vaisseau.impact == false && myGamePiece_Vaisseau.impact2 == false) {
                    acceleration(myGamePiece_Vaisseau)
                } else {
                    if (game.keyCode7 == true && myGamePiece_Vaisseau.impact == true) {
                        crash(myGamePiece_Vaisseau)
                    } else {
                        if (game.keyCode7 == true && myGamePiece_Vaisseau.impact2 == true) {
                            getStar(myGamePiece_Vaisseau)
                        } else {
                            if (game.keyCode7 == false && myGamePiece_Vaisseau.impact == false && myGamePiece_Vaisseau.impact2 == false) {
                                accelerationNulle(myGamePiece_Vaisseau)
                            }
                        }
                    }
                }
                if (myGamePiece_Vaisseau.x < 1) {
                    myGamePiece_Vaisseau.x = 1
                }
                if (myGamePiece_Vaisseau.x > 800) {
                    myGamePiece_Vaisseau.x = 800
                }
                if (myGamePiece_Vaisseau.y > 500) {
                    myGamePiece_Vaisseau.y = 500
                }
                if (myGamePiece_Vaisseau.y < 25) {
                    myGamePiece_Vaisseau.y = 25
                }
                if (game.keyCode1 == true && myGamePiece_Missile.nouveau_tir == false) {
                    myGamePiece_Missile.x = myGamePiece_Vaisseau.x + 50;
                    myGamePiece_Missile.y = myGamePiece_Vaisseau.y;
                    myGamePiece_Missile.Speed = 10;
                    nouveau_missile(myGamePiece_Missile);
                    tirMissile += 1
                }
                if (myGamePiece_Drawing.x >= 800) {
                    myGamePiece_Drawing.x = 0;
                    drawing += 1
                }
            }
        }

        function updateGame() {
            game.clear();
            myGamePiece_Missile.draw();
            myGamePiece_Etoiles.draw();
            myGamePiece_GrosRocher.draw();
            myGamePiece_Affichage.draw();
            myGamePiece_Drawing.draw();
            myGamePiece_Evenements.update();
            this.score = myGamePiece_Affichage.score1;
            context.font = "30px Verdana";
            context.fillStyle = "#FFFFFF";
            context.fillText("Score: " + myGamePiece_Affichage.score1, 10, 50);
            myGamePiece_Vaisseau.update()
        };
    </script>
</body>

</html>
